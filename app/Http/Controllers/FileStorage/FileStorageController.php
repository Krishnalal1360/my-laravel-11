<?php

namespace App\Http\Controllers\FileStorage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FileStorage\FileStorageModel;
use Illuminate\Support\Facades\Storage;

class FileStorageController extends Controller
{
    //
    public function form(){
        //
        return view('FileStorage/FileStorageView');
    }
    //
    public function submit(Request $request){
        //
        //dd($request->all());
        //
        //$file = Storage::disk('local')->put('/', $request->file('file'));
        //
        $file = Storage::disk('public')->put('/', $request->file('file'));
        //
        dd($file);
    }
}
