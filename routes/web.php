<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('usuario', UsuarioController::class);
Route::get('/plantilla', [PlantillaController::class, 'show']);
Route::get('/login',[LoginController::class,'show']);
Route::get('/registro', [RegistroController::class, 'show']);