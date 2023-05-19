<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CocinaController extends Controller
{
    public function cocina()
    {
        return view('cocina');
    }
}
