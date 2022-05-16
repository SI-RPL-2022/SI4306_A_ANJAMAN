<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    public static function getOrderById($id) {
        $order = DB::table('orders')
            ->where('id', $id)
            ->first();
        
        return $order;
    }

    public static function getOrdersByUsernameAndStatus(String $username) {
        $orders = DB::table('orders as o')
            ->join('addresses as a', 'o.address_id', 'a.id')
            ->select('o.*', 'a.fullname', 'a.phone_number', 'a.province', 'a.city', 'a.subdistrict', 'a.address', 'a.postal_code')
            ->where('o.username', $username)
            ->where('o.status', null);

        $orders = $orders->get();
        return $orders;
    }
}
