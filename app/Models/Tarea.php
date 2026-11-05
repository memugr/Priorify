<?php

namespace App\Models;

use App\Models\Estado;
use App\Models\Etiqueta;
use App\Models\Proyecto;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tarea extends Model
{
    //
    protected $table = 'tareas';
    protected $primaryKey = 'id_tarea';
    public $timestamps = false;

    /**
     * FK_tareas_proyectos: Relación entre Tarea y Proyecto
     */
    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(Proyecto::class, 'tarea_proyecto_id');
    }

    /**
     * FK_tareas_estados: Relación entre Tarea y Estado
     */
    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    /**
     * FK_tareas_creador: Relación entre Tarea y Usuario creador
     */
    public function creador(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'creador_tarea_id');
    }

    /**
     * FK_tareas_asignado: Relación entre Tarea y Usuario asignado
     */
    public function asignado(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'asignado_id');
    }

    /**
     * Relación M:N con tabla intermedia etiquetas_tareas, que relaciona Tarea y Etiqueta
     */
    public function etiquetas(): BelongsToMany
    {
        return $this->belongsToMany(Etiqueta::class, 'etiquetas_tareas', 'tarea_etiqueta_id', 'etiqueta_tarea_id');
    }
}
