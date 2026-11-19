<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\Usuario_proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Proyecto::query();

        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($q) use ($search) {
                $q->where('nombre', 'like', '%' . $search . '%')
                    ->orWhere('descripcion', 'like', '%' . $search . '%');
            });
        }

        $proyectos = $query->orderBy('nombre', 'asc')->get();
        return view('proyectos', compact('proyectos', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $proyecto = new Proyecto();
        $proyecto->nombre = Str::ucfirst(trim($request->input('nombre'))); 
        $proyecto->descripcion = Str::ucfirst(trim($request->input('descripcion', '')));
        //Str: primer caracter en mayúscula y trim para eliminar espacios al inicio y final
        $proyecto->fecha_creacion = now();
        $proyecto->fecha_entrega = $request->input('fecha_entrega');
        $proyecto->save();

        $usuarioProyecto = new Usuario_proyecto();
        $usuarioProyecto->id_usuario_proyecto = Auth::id(); 
        $usuarioProyecto->id_proyecto_usuario = $proyecto->id_proyecto;
        $usuarioProyecto->id_rol_proyecto = 1; // Asignar el rol de administrador (1) al usuario que crea el proyecto
        $usuarioProyecto->save();

        return redirect()->route('proyectos.index')->with('success', '¡Proyecto creado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
        return view('proyecto', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        //
    }

    /**
     * Determine if the authenticated user is an admin of the specified project.
     */
    private function esAdmin(Proyecto $proyecto): bool
    {
        $usuarioProyecto = Usuario_proyecto::where('id_usuario_proyecto', Auth::id())
            ->where('id_proyecto_usuario', $proyecto->id_proyecto)
            ->first();

        return $usuarioProyecto && $usuarioProyecto->id_rol_proyecto == 1;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
        if (!$this->esAdmin($proyecto)) {
            $resposta = redirect()->route('proyectos.show', $proyecto)->with('error', 'No tienes permisos para editar este proyecto.');
        } else {
            $proyecto->nombre = Str::ucfirst(trim($request->input('nombre')));
            $proyecto->descripcion = Str::ucfirst(trim($request->input('descripcion', '')));
            $proyecto->fecha_entrega = $request->input('fecha_entrega');
            $proyecto->save();

            $resposta = redirect()->route('proyectos.show', $proyecto)->with('success', '¡Proyecto actualizado!');
        }

        return $resposta;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
        if (!$this->esAdmin($proyecto)) {
            $resposta = redirect()->route('proyectos.show', $proyecto)->with('error', 'No tienes permisos para eliminar este proyecto.');
        } else {
            Usuario_proyecto::where('id_proyecto_usuario', $proyecto->id_proyecto)->delete();
            $proyecto->delete();
            
            $resposta = redirect()->route('proyectos.index')->with('success', '¡Proyecto eliminado!');
        }

        return $resposta;
    }
}
