<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        /* $usuario=new Usuario();
        $usuario->nombre_usuario='Rigoberto';
        $usuario->email='Riboerto@gmail.com';
        $usuario->password=bcrypt("pepe");
        //$usuario->fecha_creacion=Carbon::now(); //clase de laravel para trabajar con fechas.
        $usuario->save();*/


        return view('auth.login'); 
    }

    public function login(Request $request)
    {
        $usuario = Usuario::where('email', $request->input('email'))->first();
        if ($usuario && Hash::check($request->input('password'), $usuario->password)) {
            Auth::login($usuario);
            $response = redirect('/');
        } else {
            session()->flash('Error', 'Credenciales no válidas.');
            $response = redirect()->back()->withInput();
        }

        return $response;
    }
}




