<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlantillaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/login', [LoginController::class, 'show']);
Route::get('/plantilla', [PlantillaController::class, 'show']);
Route::get('/index',[IndexController::class,'show']);