<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public static function getProducts() {
        $products = DB::table('products')
            ->get();

        return $products;
    }

    public static function getProductById(int $id) {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();
            
        return $product;
    }

    public static function getProductByCategory(String $category) {
        $product = DB::table('products')
            ->where('category', $category)
            ->get();
            
        return $product;
    }
}