<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultadosController extends Controller
{
       public function ResultadoAcademico()
    {
        return view('Resultados.ResultadoAcademico');
    }
       public function ResultadoArtes()
    {
        return view('Resultados.ResultadoArtes');
    }
       public function ResultadoDeportista()
    {
        return view('Resultados.ResultadoDeportista');
    }
}
