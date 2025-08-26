<?php

namespace App\Models\EloquentORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class EmployeeModel extends Model
{
    //
    use HasFactory, Notifiable;
    //
    protected $table = 'employees';
    //
    protected $fillable = [
        'name',
        'email',
        'password',
        'salary',
    ];
    //
    protected $hidden = [
        'password',
    ];
    //
    public static function newFactory(){
        //
        return \Database\Factories\EmployeeFactory::new();
    }
}
