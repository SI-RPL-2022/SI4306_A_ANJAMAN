<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

class MarketController extends Controller
{
    public function show() {
        return view('user/market', [
            'products' => Product::getProducts(),
        ]);
    }
}