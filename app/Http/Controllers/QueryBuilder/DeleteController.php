<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    //
    public function delete($id){
        //
        DB::table('querybuilders')->where('id', $id)->delete();
        //
        $data = DB::table('querybuilders')->get();
        //
        return view('QueryBuilder/DeleteView', compact('data'));
    }
}
