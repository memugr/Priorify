<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Utils\Validacio;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'nombre_usuario' => 'required|unique:usuarios,nombre_usuario',
            'email'          => 'required|email|unique:usuarios,email',
            'password'       => 'required|min:6|confirmed',
        ], [
            'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
            'nombre_usuario.unique'   => 'Este nombre de usuario ya está en uso.',
            'email.required'          => 'El correo electrónico es obligatorio.',
            'email.email'             => 'Introduce un correo electrónico válido.',
            'email.unique'            => 'Este correo electrónico ya está registrado.',
            'password.required'       => 'Debes introducir una contraseña.',
            'password.confirmed'      => 'Las contraseñas no coinciden.',
            'password.min'            => 'La contraseña debe tener al menos 8 caracteres.',
        ]);
    

        $usuario = new Usuario();
        $usuario->nombre_usuario = $request->input('nombre_usuario');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->fecha_creacion = now()->format('Ymd H:i:s');
        try{
            $usuario->save();
            session()->flash('success', '¡Te has registrado correctamente! Ya puedes iniciar sesión.');
        } catch (QueryException $e) {
            $errorMessage = Validacio::missatgeError($e);
            session()->flash('error', $errorMessage);
        }

        return redirect()->route('registro');
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
