<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\ProductModel;

class RestoreForceDeleteController extends Controller
{
    //
    public function restoreData($id){
        //
        ProductModel::withTrashed()->findOrFail($id)->restore();
        //
        $data = ProductModel::all();
        //
        return view('EloquentORM/RestoreForceDeleteView', compact('data'));
    }
    //
    public function forceDeleteData($id){
        //
        ProductModel::withTrashed()->findOrFail($id)->forceDelete();
        //
        $data = ProductModel::all();
        //
        return view('EloquentORM/RestoreForceDeleteView', compact('data'));
    }
}
