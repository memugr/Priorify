<?php

namespace App\Models;

use App\Models\Proyecto;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario_proyecto extends Model
{
    //
    protected $table = 'usuarios_proyecto';
    protected $primaryKey = 'id_gestor';
    public $timestamps = false;

    //Relación ternaria entre Usuarios, Roles y Proyectos

    /**
     * Relación entre Usuario_proyecto y Usuario
     */
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario_proyecto');
    }

    /**
     * Relación entre Usuario_proyecto y Rol
     */
    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'id_rol_proyecto');
    }

    /**
     * Relación entre Usuario_proyecto y Proyecto
     */
    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto_usuario');
    }
}
