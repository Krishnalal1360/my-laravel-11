<?php

namespace App\Http\Controllers\EloquentORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EloquentORM\EmployeeModel;

class EmployeeCreate extends Controller
{
    //
    public function create(){
        //
        EmployeeModel::create(
            [
                'name' => 'David Christ',
                'email' => 'david@gmail.com',
                'password' => '123456',
                'salary' => '15000',
            ]
        );
    }
    //
    public function insert(){
        //
        EmployeeModel::insert(
            [
                'name' => 'Alex Christ',
                'email' => 'alex@gmail.com',
                'password' => '12345678',
                'salary' => '25000',
            ]
        );
    }
}
