<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //
    protected $table = 'tareas';
    protected $primaryKey = 'id_tarea';
    public $timestamps = false;
}
