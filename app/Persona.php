<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'Personas';

    protected $fillable = ['nombre', 'apellidos', 'escuela', 'grupo', 'sexo', 'tipo', 'usuario_id'];
}
