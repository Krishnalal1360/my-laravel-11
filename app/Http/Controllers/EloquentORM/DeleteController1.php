<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\ProductModel;

class DeleteController1 extends Controller
{
    //
    public function delete($id){
        //
        $user = ProductModel::findOrFail($id)->delete();
        //
        $data = ProductModel::all();
        //
        return view('EloquentORM/DeleteView', compact('data'));
    }
}
