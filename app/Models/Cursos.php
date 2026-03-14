<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
 
protected $table = "cursos";
public $timestamps = false;
protected  $fillable = ['nombre', 'instructor_id'];

}
