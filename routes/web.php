<?php

use App\Http\Controllers\CacaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
    return view('auth.login'); });

    Route::resource('usuario', UsuarioController::class);
});


Route::get('/plantilla', [PlantillaController::class, 'show']);
Route::get('/login',[LoginController::class,'show']);
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/caca', [CacaController::class, 'showCaca'])->name('caca');