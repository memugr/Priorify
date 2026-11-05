<?php

namespace App\Models;

use App\Models\Tarea;
use App\Models\Usuario_proyecto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyecto extends Model
{
    //
    protected $table = 'proyectos';
    protected $primaryKey = 'id_proyecto';
    public $timestamps = false;

    /**
     * FK_usuarios_proyecto_proyecto: Relación entre Proyecto y Usuario_proyecto
     */
    public function usuario_proyecto(): HasMany
    {
        return $this->hasMany(Usuario_proyecto::class, 'id_proyecto_usuario');
    }

    /**
     * FK_tareas_proyectos: Relación entre Proyecto y Tarea
     */
    public function tareas(): HasMany
    {
        return $this->hasMany(Tarea::class, 'tarea_proyecto_id');
    }
}
