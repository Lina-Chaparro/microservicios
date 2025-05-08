<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramacionTem extends Model
{
    protected $table = "programacion_tema"; //esto es el nombre de la tabla en la base de datos
    public $timestamps = false; //si no tienes las columnas created_at y updated_at en la tabla, pon esto en true    

}
