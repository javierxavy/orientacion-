<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Persona;
use App\User;

class formularioController extends Controller
{
    public function Formulario()
    {
        return view('registro.Formulario');
    }

    public function registro(Request $request)
    {
    	//dd($request);
    	$usuario = new User(Input::all());
    	$usuario->save();
    	//dd($usuario);
    	$user_id = $usuario->id;
    	$persona = new Persona(Input::all());
    	$persona->usuario_id = $user_id;
    	$persona->save();

    	return redirect()->route('Formulario');
    }
}
