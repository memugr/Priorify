<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
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
        $request->validate([
        'nombre_usuario' => 'required',
        'email'          => 'required|email',
        'password'       => 'required|confirmed', // <--- Exige que password coincida con password_confirmation
    ], [
        'password.confirmed' => 'Las contraseñas no coinciden.',
    ]
    
    );

        $usuario = new Usuario();
        $usuario->nombre_usuario = $request->input('nombre_usuario');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->fecha_creacion = now();
        $usuario->save();

        return redirect()->back()->with('exito', '¡Te has registrado correctamente! Ya puedes iniciar sesión.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
