<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'documento'=>'required',
        'nombres'=>'required',
        'apellidos'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required'
    ];

    protected $fillable=['title','documento','nombres','apellidos','descripcion', 'start', 'end'];
}
