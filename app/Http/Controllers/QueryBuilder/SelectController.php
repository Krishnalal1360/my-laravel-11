<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectController extends Controller
{
    //
    public function select(){
        //
        $data = DB::table('querybuilders')->select('id', 'name', 'email', 'contact')->get();
        //
        return view('QueryBuilder/SelectView', compact('data'));
    }
}
