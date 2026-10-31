<?php

namespace App\Models;

use App\Models\Tarea;
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
    
    public function tareasCreadas(): HasMany
    {
        return $this->hasMany(Tarea::class, 'creador_tarea_id');
    }

    public function tareasAsignadas(): HasMany
    {
        return $this->hasMany(Tarea::class, 'asignado_id');
    }
}
