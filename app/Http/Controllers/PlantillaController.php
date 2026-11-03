<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function show()
    {
        return view('layouts.plantilla_main'); 
    }
}
