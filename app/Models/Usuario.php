<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;


    protected $fillable=[ 
        'cedula',
        'nombre',
        'apellido',
        'celular',
        'telefono',
        'correo',
        'direccion',
        'usuario',
        'contraseña',
        'estado',
        'rol',
        ];

}
