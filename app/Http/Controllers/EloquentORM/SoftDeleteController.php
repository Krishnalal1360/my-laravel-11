<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\ProductModel;

class SoftDeleteController extends Controller
{
    //
    public function softDelete($id){
        //
        ProductModel::findOrFail($id)->delete();
        //
        $data = ProductModel::all();
        //
        //$data = ProductModel::withTrashed()->get();
        //
        //$data = ProductModel::onlyTrashed()->get();
        //
        return view('EloquentORM/SoftDeleteView', compact('data'));
    }
}
