<?php

namespace App\Models;

use App\Models\Tarea;
use App\Models\Usuario_proyecto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    //
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    
    /**
     * FK_tareas_creador: Relación entre Usuario y tareas creadas
     */
    public function tareasCreadas(): HasMany
    {
        return $this->hasMany(Tarea::class, 'creador_tarea_id');
    }

    /**
     * FK_tareas_asignado: Relación entre Usuario y tareas asignadas
     */
    public function tareasAsignadas(): HasMany
    {
        return $this->hasMany(Tarea::class, 'asignado_id');
    }

    /**
     * FK_usuarios_proyecto_usuario: Relación entre Usuario y Usuario_proyecto
     */
    public function usuario_proyecto(): HasMany
    {
        return $this->hasMany(Usuario_proyecto::class, 'id_usuario_proyecto');
    }
}
