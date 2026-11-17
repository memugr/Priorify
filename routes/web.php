<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/', function () { return view('auth.login'); });
    Route::get('/index', [IndexController::class, 'showIndex'])->name('index');
    Route::resource('/proyectos', ProyectoController::class);
});

//Rutas públicas
Route::resource('usuario', UsuarioController::class);
Route::get('/plantilla', [PlantillaController::class, 'show']);
Route::get('/login',[LoginController::class,'show'])->name('login'); // Abigail
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/registro', [RegistroController::class, 'showRegistro'])->name('registro');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// PROYECTOS 
 // Mostrar lista de proyectos