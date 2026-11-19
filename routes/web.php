<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::get('/index', [IndexController::class, 'showIndex'])->name('index');

    // Proyectos
    Route::resource('proyectos', ProyectoController::class);

    // Añadir & eliminar miembros
    Route::post('/proyectos/{proyecto}/miembros', [ProyectoController::class, 'agregarMiembro'])->name('proyectos.miembros.add');
    Route::delete('/proyectos/{proyecto}/miembros/{usuario}',[ProyectoController::class, 'eliminarMiembro'])->name('proyectos.miembros.remove');
});

//Rutas públicas
Route::resource('usuario', UsuarioController::class);
Route::get('/plantilla', [PlantillaController::class, 'show']);
Route::get('/login',[LoginController::class,'show'])->name('login'); // Abigail
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/registro', [RegistroController::class, 'showRegistro'])->name('registro');
Route::get('/index', [IndexController::class, 'showIndex'])->name('index');
Route::resource('/tarea', TareaController::class);
Route::post('/proyectos/{proyecto}/tareas', [TareaController::class, 'store'])
    ->name('tareas.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
