<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;
    
    protected $fillable=[ 
            'estado',
            'num_rem',
            'tipo',
            'descripcion',
            'fecha_salida',
            'fecha_ingreso',
            'cliente'];

   
}
 