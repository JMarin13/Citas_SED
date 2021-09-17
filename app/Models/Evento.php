<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'documento'=>'required',
        'nombres'=>'required',
        'apellidos'=>'required',
        'descripcion'=>'required'
    ];

    protected $fillable=['documento','nombres','apellidos','descripcion'];
}
