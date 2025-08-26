<?php

namespace App\Models\QueryBuilder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class QueryBuilderModel extends Model
{
    //
    use HasFactory, Notifiable;
    //
    protected $table = 'querybuilders';
    //
    protected $fillable = [
        'name',
        'email',
        'contact',
    ];
    // 
    protected static function newFactory(){
        return \Database\Factories\QueryBuilderFactory::new();
    }
}
