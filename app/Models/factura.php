<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;

    //protected $table = 'factura';
   // protected $primaryKey ='id_factura';
    //public $timestamps = false;
    //protected $fillable =['id_factura','cantidad','descripcion','precio_unidad','tolal','fecha','cliente'];

    protected $fillable=[ 
            'cantidad',
            'descripcion',
            'precio_unidad',
            'total',
            'fecha',
            'cliente'];
        }