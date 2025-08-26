<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $count_products = DB::table('products')->count();
        //
        $min_product_price = DB::table('products')->min('price');
        //
        $max_product_price = DB::table('products')->max('price');
        //
        $sum_product_price = DB::table('products')->sum('price');
        //
        $avg_product_price = DB::table('products')->avg('price');
        //
        $data = [
            'count' => $count_products,
            'min' => $min_product_price,
            'max' => $max_product_price,
            'sum' => $sum_product_price,
            'avg' => $avg_product_price,
        ];
        return view('QueryBuilder/AggregateView', compact('data'));
    }
}
