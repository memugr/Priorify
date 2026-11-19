<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function showIndex()
    {
        return view('index');
    }
}
