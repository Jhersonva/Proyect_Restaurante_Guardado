<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria()
    {
        return view('categoria');
    }
        
    
}
