<?php

namespace App\Models\QueryBuilder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class ProductModel extends Model
{
    //
    use HasFactory, Notifiable;
    //
    protected $table = 'products';
    //
    protected $fillable = [
        'title',
        'description',
        'price',
    ];
    //
    public static function newFactory(){
        return \Database\Factories\ProductFactory::new();
    }
}
