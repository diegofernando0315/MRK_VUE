<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable=[ 
        'inicio',
        'final',
        'total_dia',
        'fecha',
        'empleado'];
}
