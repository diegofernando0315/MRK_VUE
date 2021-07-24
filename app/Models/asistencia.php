<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    use HasFactory;

    protected $table = 'asistencia';
    protected $primarykey = 'id asistncia';
    public $timestamps = false;
    protected $fillable = ['id_asistencia','inicio','fin','total_dia','fecha','empleado'];

}
    
