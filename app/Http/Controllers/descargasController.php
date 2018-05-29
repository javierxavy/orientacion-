<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class descargasController extends Controller
{
    
     public function Descargas()
    {
        return view('Descargas.Descargas');
    }
}
