<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CacaController extends Controller
{
    public function showCaca() {
        return view('caca');
    }
}
