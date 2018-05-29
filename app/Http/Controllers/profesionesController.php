<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profesionesController extends Controller
{
     public function Dentista()
    {
        return view('profesiones.Dentista');
    }
     public function Deportista()
    {
        return view('profesiones.Deportista');
    }
     public function Diseno()
    {
        return view('profesiones.Diseno');
    }
     public function Medicina()
    {
        return view('profesiones.Medicina');
    }
     public function Menu()
    {
        return view('profesiones.Menu');
    }
     
     public function Paleontologo()
    {
        return view('profesiones.Paleontologo');
    }

     public function Profesor()
    {
        return view('profesiones.Profesor');
    }
     public function Psicologo()
    {
        return view('profesiones.Psicologo');
    }
     public function Sistemas()
    {
        return view('profesiones.Sistemas');
    }
     public function Turismo()
    {
        return view('profesiones.Turismo');
    }
    
}
