<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
        	'usuario' => 'master',
        	'password' => \Hash::make('master')
        ]);
    }
}
