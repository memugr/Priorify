<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $datos = $request->validate([
            'nombre_tarea'     => 'required|string|max:150',
            'etiqueta'         => 'nullable|string|max:100',
            'descripcion'      => 'nullable|string|max:1000',
            'estado_tarea'     => 'required|exists:estados,id_estado',
            'persona_asignada' => 'required|string|max:150',
            'fecha_inicio'     => 'nullable|date',
            'fecha_entrega'    => 'nullable|date|after_or_equal:fecha_inicio',
        ]);

        $tarea = new Tarea();
        $tarea->nombre           = Str::ucfirst(trim($datos['nombre_tarea']));
        $tarea->etiqueta         = $datos['etiqueta'] ?? null;
        $tarea->descripcion      = $datos['descripcion'] ?? null;
        $tarea->id_estado        = $datos['estado_tarea'];
        $tarea->persona_asignada = $datos['persona_asignada'];
        $tarea->fecha_inicio     = $datos['fecha_inicio'] ?? null;
        $tarea->fecha_entrega    = $datos['fecha_entrega'] ?? null;
        $tarea->id_proyecto      = $proyecto->id_proyecto;
        $tarea->save();

        return redirect()->route('proyectos.show', $proyecto)
            ->with('success', '¡Tarea creada!');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        return view('modals.crearTarea', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
