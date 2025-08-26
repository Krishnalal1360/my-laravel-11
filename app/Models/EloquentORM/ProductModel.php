<?php

namespace App\Models\EloquentORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD

=======
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> c643cb8 (Query Builder and Eloquent ORM)

class ProductModel extends Model
{
    //
    use HasFactory, Notifiable;
<<<<<<< HEAD
=======
    use SoftDeletes;
>>>>>>> c643cb8 (Query Builder and Eloquent ORM)
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
<<<<<<< HEAD
=======
    //
    public function scopeID($query){
        //
        return $query->where('id', '=', 1);
    }
>>>>>>> c643cb8 (Query Builder and Eloquent ORM)
}
