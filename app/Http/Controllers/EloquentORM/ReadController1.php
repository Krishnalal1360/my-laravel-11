<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\ProductModel;

class ReadController1 extends Controller
{
    //
    public function readAll(){
        //
        $data = ProductModel::all();
        //
        return view('EloquentORM/ReadView', compact('data'));
    }
    //
    public function readId($id){
        //
        $data = ProductModel::where('id', $id)->get();
        //
        return view('EloquentORM/ReadView', compact('data'));
    }
}
