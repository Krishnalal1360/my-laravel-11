<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\ProductModel;

class ConditionalClauseController extends Controller
{
    //
    public function conditionalClause1($id){
        //
        $data = ProductModel::where('id', '=', $id)->get();
        //
        //$data = ProductModel::where('id', '!=', $id)->get();
        //
        //$data = ProductModel::whereIn('id', [1, 2, 3, 4, 5])->get();
        //
        //$data = ProductModel::whereBetween('id', [1, 5])->get();
        //
        return view('EloquentORM/ConditionalClauseView', compact('data'));
    }
    //
    public function conditionalClause2($id, $price){
        //
        $data = ProductModel::where(['id' => $id, 'price' => $price])->get();
        //
        //$data = ProductModel::where('id', '>=', $id)->orWhere('price', '<=', 900)->get();
        //
        return view('EloquentORM/ConditionalClauseView', compact('data'));
    }
    //
    public function conditionalClause3($name){
        //
        $data = ProductModel::where('title', 'LIKE', "%{$name}%")->get();
        //
        //$data = ProductModel::where('title', 'LIKE', "{$name}%")->get();
        //
        //$data = ProductModel::where('title', 'NOT LIKE', "%{$name}%")->get();
        //
        return view('EloquentORM/ConditionalClauseView', compact('data'));
    }
    //
    public function queryScope(){
        //
        $data = ProductModel::Id()->get();
        //
        return view('EloquentORM/ConditionalClauseView', compact('data'));
    }
}
