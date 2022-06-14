<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Address;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaksi_show()
    {
        return view('/admin/transaksi', [
            'order' => Order::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function transaksi_edit($id)
    {
        $order = Order::findOrFail($id);
        return view('/admin/editstatus', [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function transaksi_update(Request $request, int $id) {

        // validating input
        $order = Order::find($id);

        $order->status = $request['status'];
        $order->save();
        return redirect('/admin/transaksi');
    }
    
    public function detail(int $id) {

        $detail = OrderDetail::getOrderDetailById($id);

        return view('/admin/detailtransaksi', [
            'detail' => $detail,
        ]);
    }

    public function destroy_order($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect('/admin/transaksi');
    }




    
    // Manage Market

    public function managemarket_show()
    {
        return view('/admin/manage_market', [
            'product' => Product::all()
        ]);
    }

    public function managemarket_edit(int $id) {

        $product = Product::getProductById($id);

        return view('/admin/editmanagemarket', [
            'product' => $product,
        ]);
    }

    public function managemarket_create() {
        return view('admin/createmanagemarket', [
            'title' => 'Product | Create'
        ]);
    }

    public function managemarket_store(Request $request) {

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        $product = new Product;

        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->category = $request['category'];

        $product->image = $image;

        if($request->images)
        {
            $imagesname = '';
            foreach($request->images as $key=>$image)
            {
                $images = time(). $key. '.'.$image->extension();
                $request->images->move(public_path('images'), $images);
                $imagesname = $imagesname . ',' . $images;
            }
            $product->images = $imagesname;
        }

        $product->save();

        return redirect('/admin/manage_market');
    }

    public function managemarket_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required'
        ]);
        
        $product = Product::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('images');
            $product->image = $path;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category = $request->category;
        $product->save();
    
        return redirect('/admin/manage_market');
    }

    // public function managemarket_update(Request $request, int $id) {

    //     $product = Product::find($id);

    //     $product->name = $request['name'];
    //     $product->description = $request['description'];
    //     $product->price = $request['price'];
    //     $product->stock = $request['stock'];
    //     $product->category = $request['category'];
    //     $product->image = $request['image'];

    //     $product->save();

    //     return redirect('/admin/manage_market');
    // }

    public function managemarket_destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/manage_market');
    }
}