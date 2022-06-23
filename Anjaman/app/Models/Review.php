<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'comment',
        'order_detail_id'
    ];

    public static function getReviewProduct($id) {
        DB::statement("SET SQL_MODE=''");
        $review = DB::table('reviews as r')
            ->join('order_details as od', 'r.order_detail_id', '=', 'od.id')
            ->join('products as p', 'od.product_id', '=', 'p.id')
            ->select('od.*', 'r.*', 'p.*', DB::raw('AVG(r.rating) as avgrate'))
            ->groupBy('p.id')
            ->where('p.id', $id)
            ->get()->first();
            return $review;
    }
}
