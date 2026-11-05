<?php

namespace App\Models;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    //
    protected $table = 'estados';
    protected $primaryKey = 'id_estado';
    public $timestamps = false;

    /**
     * FK_tareas_estados: Relación entre Estado y Tarea
     */
    public function tareas(): HasMany
    {
        return $this->hasMany(Tarea::class, 'estado_id');
    }
}
