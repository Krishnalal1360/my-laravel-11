<?php

namespace App\Models\FormValidation;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\FormValidationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class FormValidationModel extends Model
{
    use HasFactory, Notifiable;
    //
    protected $table = 'form_validation_models';
    //
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
    //
    protected $hidden = [
        'email',
        'message',
    ];
    //
    public static function newFactory(){
        return FormValidationFactory::new();
    }
}
