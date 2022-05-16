<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    use HasFactory;

    public static function getOrderDetailById($id) {
        $detail = DB::table('order_details')
            ->where('id', $id)
            ->get()->first();
        
        return $detail;
    }
}