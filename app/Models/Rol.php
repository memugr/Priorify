<?php

namespace App\Models;

use App\Models\Usuario_proyecto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    //
    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    public $timestamps = false;

    /**
     * FK_usuarios_proyecto_rol: Relación entre Rol y Usuario_proyecto
     */
    public function usuario_proyecto(): HasMany
    {
        return $this->hasMany(Usuario_proyecto::class, 'id_rol_proyecto');
    }
}
