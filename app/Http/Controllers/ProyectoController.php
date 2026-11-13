<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
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

        return redirect()->route('proyectos.index')->with('success', '¡Proyecto creado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
