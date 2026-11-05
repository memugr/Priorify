<?php

namespace App\Models;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etiqueta extends Model
{
    //
    protected $table = 'etiquetas';
    protected $primaryKey = 'id_etiqueta';
    public $timestamps = false;

    /**
     * Relación M:N con tabla intermedia etiquetas_tareas, que relaciona Tarea y Etiqueta
     */
    public function tareas(): BelongsToMany
    {
        return $this->belongsToMany(Tarea::class, 'etiquetas_tareas', 'etiqueta_tarea_id', 'tarea_etiqueta_id');
    }
}
