<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona_Test extends Model
{
    //
    protected $table = 'persona_test';

    protected $fillable = ['test_id', 'resultado', 'persona_id'];
}
