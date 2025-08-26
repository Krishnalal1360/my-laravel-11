<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    //
    public function update($id){
        //
        DB::table('querybuilders')->where('id', $id)->update([
            'name' => 'David Christ',
            'email' => 'david@gmail.com',
            'contact' => '1234567890',
        ]);
        //
        $data = DB::table('querybuilders')->where('id', $id)->get();
        //
        return view('QueryBuilder/UpdateView', compact('data'));
    }
}
