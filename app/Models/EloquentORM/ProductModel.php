<?php

namespace App\Models\EloquentORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductModel extends Model
{
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
    /*protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];*/
    //
    public static function newFactory(){
        return \Database\Factories\ProductFactory::new();
    }
    //
    public function scopeID($query){
        //
        return $query->where('id', '=', 1);
    }
}
