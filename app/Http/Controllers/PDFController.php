<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
     public function Libro1()
    {
        return view('Libros.Educacion para el Desarrollo Sostenible');
    }

     public function Libro2()
    {
        return view('Libros.El Tacto De La Ensenanza');
    }

     public function Libro3()
    {
        return view('Libros.El Valor De Educar');
    }
     public function Libro4()
    {
        return view('Libros.Pedagogia de la Esperanza');
    }

}
