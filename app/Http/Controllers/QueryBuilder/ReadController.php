<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QueryBuilder\QueryBuilderModel;
use Illuminate\Support\Facades\DB;

class ReadController extends Controller
{
    //
    public function readAll(){
        //$data = QueryBuilderModel::all();
        $data = DB::table('querybuilders')->get();
        //
        return view('QueryBuilder/ReadView', compact('data'));
    }
    //
    public function readEmail1($email){
        $data = DB::table('querybuilders')->where('email', $email)->get();
        //
        return view('QueryBuilder/ReadView', compact('data'));
    }
    //
    public function readEmail2($email){
        $data = DB::table('querybuilders')->where('email', $email)->get();
        //
        return view('QueryBuilder/ReadView', compact('data'));
    }
}
