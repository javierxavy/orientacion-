<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class colorescontroller extends Controller
{
        public function Azul()
    {
        return view('Colores.Azul');
    }

         public function Amarillo()
    {
        return view('Colores.Amarillo');
    }

         public function Blanco()
    {
        return view('Colores.Blanco');
    }

         public function Morado()
    {
        return view('Colores.Morado');
    }

         public function Naranja()
    {
        return view('Colores.Naranja');
    }

         public function Rojo()
    {
        return view('Colores.Rojo');
    }

         public function Verde()
    {
        return view('Colores.Verde');
    }

}
