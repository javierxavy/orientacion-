<?php

use Illuminate\Database\Seeder;
use App\Test;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Test::create([
        	'nombre' => 'Test de Colores',
        	'tipo' => 'Personalidad',
        	'descripcion' => 'Descubre segun tus gustos de colores como es que en realidad eres.'
        ]);

        Test::create([
        	'nombre' => 'Test de Modos de Aprendizaje',
        	'tipo' => 'Aprendizaje',
        	'descripcion' => 'Descubre cual es la mejor manera en la que tu recibes conocimiento.'
        ]);

        Test::create([
        	'nombre' => 'Test de Orientacion Vocacional',
        	'tipo' => 'Vocacional',
        	'descripcion' => 'Descubre cuales son tus gustos y con ello sabras a que te podras dedicar en un futuro.'
        ]);
    }
}
