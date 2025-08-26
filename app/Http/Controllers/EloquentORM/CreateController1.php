<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\ProductModel;

class CreateController1 extends Controller
{
    //
    public function create(){
        $product = new ProductModel();
        //
        $product->title = 'Dell';
        //
        $product->description = 'Dell Inspiron 15 Series';
        //
        $product->price = 50000;
        //
        $product->save();
        //
        $products = ProductModel::all();
        //
        return view('EloquentORM/CreateView', compact('products'));
    }
}
