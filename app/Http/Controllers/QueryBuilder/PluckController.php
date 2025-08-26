<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PluckController extends Controller
{
    //
    public function pluck(){
        //
        $data = DB::table('querybuilders')->pluck('email', 'id')->toArray();
        //
        return view('QueryBuilder/PluckView', compact('data'));
    }
}
