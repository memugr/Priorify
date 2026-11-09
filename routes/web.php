<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantillaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/plantilla', [PlantillaController::class, 'show']);
Route::get('/login',[LoginController::class,'show']);