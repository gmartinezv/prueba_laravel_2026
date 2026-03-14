<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = "calificacion";
    public $timestamps = false;
    
    protected  $fillable = ['contenido','puntaje','user_id', 'hacia_cu_in', 'curso_instructor_id'];
}



