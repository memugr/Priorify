<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
    return view('auth.login'); });

    Route::resource('usuario', UsuarioController::class);
});

Route::resource('usuario', UsuarioController::class);
Route::get('/plantilla', [PlantillaController::class, 'show']);
Route::get('/login',[LoginController::class,'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [RegistroController::class, 'showRegistro'])->name('registro');
Route::get('/index', [IndexController::class, 'showIndex'])->name('index');
