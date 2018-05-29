<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maestrosController extends Controller
{
     public function Maestros()
    {
        return view('Maestros.MenuMaestros');
    }
}
