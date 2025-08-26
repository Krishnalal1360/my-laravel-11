<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    //
    public function insert(){
        //
        DB::table('querybuilders')->insert(
            [
                [
                    'name' => 'A user',
                    'email' => 'Auser@gmail.com',
                    'contact' => '1234567891'
                ],
                [
                    'name' => 'B user',
                    'email' => 'Buser@gmail.com',
                    'contact' => '1234567892'
                ],
            ]
        );
        //
        $data = DB::table('querybuilders')->get();
        //
        return view('QueryBuilder/InsertView', compact('data'));
    }
}
