<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function create(){
        return redirect()->route('query-builder-create-view');
    }
}
