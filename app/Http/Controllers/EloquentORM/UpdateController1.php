<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\ProductModel;

class UpdateController1 extends Controller
{
    //
    public function update($id){
        //
        $user = ProductModel::find($id);
        //
        //$user = ProductModel::where('id', $id)->first();
        //
        $user->title = 'Nokia Phone';
        $user->description = 'Nokia 3.2 Android Cell Phone';
        $user->price = 15000;
        //
        $user->save();
        //
        $data = ProductModel::all();
        //
        return view('EloquentORM/UpdateView', compact('data'));
    }
}
