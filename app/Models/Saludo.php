<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saludo extends Model
{
    use HasFactory;
    // Definimos los campos rellenables
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'birthday',
        'department',
    ];

    // este method se relaciona con las traducciones common/lang
    /*static public function getLabels(){
        return __("saludo");*/
}


