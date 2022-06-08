<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register() {
        return view('user/register', [
            'title' => 'User | Register'
        ]);
    }

    public function store(Request $request) {

        // password confirmation
        if ($request['password'] != $request['confirm']) {
            return back()->withErrors([
                'confirm' => ['The provided confirmation does not match the provided password']
            ]);
        }

        // validating user data input
        $validatedUserData =  $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5|max:255',
            'username' => 'required|min:3|max:255',
            'fullname' => 'required|min:3|max:255',
            'phone_number' => 'required|size:12',
        ]);

        // hashsing password
        $validatedUserData['password'] = Hash::make($validatedUserData['password']);

        // validating address data input
        $validatedAddressData = $request->validate([
            'fullname' => 'required|min:3|max:255',
            'phone_number' => 'required|size:12',
            'province' => 'required|min:3|max:255',
            'city' => 'required|min:3|max:255',
            'subdistrict' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'postal_code' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255'
        ]);

        // set address to default address
        $validatedAddressData['default'] = 1;

        // insert record data
        User::create($validatedUserData);
        DB::table('addresses')->insert($validatedAddressData);

        return view('/user/login', [
            'title' => 'User | Login'
        ]);
    }

    public function login() {
        return view('user/login', [
            'title' => 'User | Login'
        ]);
    }

    public function authenticate(Request $request) {

        // validating input
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        // trying to logging in
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // if not succeed
        return back()->withErrors([
            'username' => ['Login failed']
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/user/login');
    }

    public function profile() {
        $orders = Order::getOrdersByUsernameAndStatus(auth()->user()->username, ['dikemas', 'dikirim', 'selesai']);
        $orderDetails = OrderDetail::getOrderDetailsByUsernameAndStatus(auth()->user()->username,  ['dikemas', 'dikirim', 'selesai']);
        return view('user/profile', [
            'user' => User::getUserByUsername(auth()->user()->username),
            'addresses' => Address::getAddressesByUsername(auth()->user()->username),
            'orders' => $orders,
            'order_details' => $orderDetails,
            'title' => 'Home | Profile'
        ]);
    }
    public function edit(int $id) {

        // authorization
        $address = Address::getAddressById($id);
        if ($address->username != auth()->user()->username) {
            abort(403, 'Unauthorized action.');
        }

        return view('/user/editaddress', [
        'address' => $address,
        'title' => 'Home | Profile'
        ]);
    }

    public function update(Request $request, int $id) {
        
        // validating input
        $address = $request->validate([
            'fullname' => 'required|min:3|max:255',
            'phone_number' => 'required|size:12',
            'province' => 'required|min:3|max:255',
            'city' => 'required|min:3|max:255',
            'subdistrict' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'postal_code' => 'required|min:3|max:255',
        ]);

        // updating address data
        DB::table('addresses')->where('id', $id)->update($address);
        return redirect('/user/profile');
    }

}
