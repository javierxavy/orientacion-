<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Persona_Test;
use App\Persona;

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

    public function store(Request $request)
    {
        //dd($request);

        if ($request->color == 'azul') {

            $user_id = Auth::id();
            $persona_id = Persona::where('usuario_id', $user_id)->get();
            //dd($persona_id);

            $persona_test = new Persona_Test();
            $persona_test->test_id = '1';
            $persona_test->resultado = $request->color;
            $persona_test->persona_id = $persona_id[0]->id;
            $persona_test->save();

            return view('Colores.azul');
        }
    }
}
