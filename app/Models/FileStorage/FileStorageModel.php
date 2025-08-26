<?php

namespace App\Models\FileStorage;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\FileStorageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class FileStorageModel extends Model
{
    //
    use HasFactory, Notifiable;
    //
    protected $table = 'file_storage_models';
    //
    protected $fillable = [
        'file_path',
    ];
    //
    protected $hidden = [
        'file_path',
    ];
    //
    public static function newFactory(){
        //
        return FileStorageFactory::new();
    }
}
