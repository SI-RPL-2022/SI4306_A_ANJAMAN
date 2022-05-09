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
            'title' => 'Home | Market'
        ]);
    }

    function find(Request $request){
        $request->validate([
          'query'=>'required|min:2'
       ]);

       $search_text = $request->input('query');
       $product = DB::table('products')
                  ->where('name','LIKE','%'.$search_text.'%')->get();
        return view('user/market',[
            'products'=>$product,
            'title' => 'Home | Market'
    ]);


    }
}