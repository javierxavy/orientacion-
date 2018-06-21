<?php

use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if (!Auth::check()) return redirect('/login');
    return redirect('/test');
});


Auth::routes();

Route::group(['middleware' => 'auth'], function() {

	Route::get('/test', 'testController@index')->name('test-index');

	Route::get('/Colores','testController@Colores')->name('Colores');

	Route::get('/Cuestionario','testController@Cuestionario')->name('Cuestionario');

	Route::get('/ModosdeAprendizaje','testController@ModosdeAprendizaje')->name('ModosdeAprendizaje');

});

Route::post('/test-color','colorescontroller@store')->name('registro-color');
Route::get('/Amarillo','colorescontroller@Amarillo')->name('Amarillo');
Route::get('/Blanco','colorescontroller@Blanco')->name('Blanco');
Route::get('/Morado','colorescontroller@Morado')->name('Morado');
Route::get('/Naranja','colorescontroller@Naranja')->name('Naranja');
Route::get('/Rojo','colorescontroller@Rojo')->name('Rojo');
Route::get('/Verde','colorescontroller@Verde')->name('Verde');

Route::get('/Descargas','descargasController@Descargas')->name('Descargas');

Route::get('/Guias','guiasController@Guias')->name('Guias');

Route::get('/Maestros','maestrosController@Maestros')->name('Maestros');

Route::get('/Libro1','PDFController@Libro1')->name('Libro1');
Route::get('/Libro2','PDFController@Libro2')->name('Libro2');
Route::get('/Libro3','PDFController@Libro3')->name('Libro3');
Route::get('/Libro4','PDFController@Libro4')->name('Libro4');

Route::get('/Dentista','profesionesController@Dentista')->name('Dentista');
Route::get('/Deportista','profesionesController@Deportista')->name('Deportista');
Route::get('/Diseno','profesionesController@Diseno')->name('Diseno');
Route::get('/Medicina','profesionesController@Medicina')->name('Medicina');
Route::get('/Menu','profesionesController@Menu')->name('Menu');
Route::get('/Profesor','profesionesController@Profesor')->name('Profesor');
Route::get('/Psicologo','profesionesController@Psicologo')->name('Psicologo');
Route::get('/Sistemas','profesionesController@Sistemas')->name('Sistemas');
Route::get('/Turismo','profesionesController@Turismo')->name('Turismo');
Route::get('/Paleontologo','profesionesController@Paleontologo')->name('Paleontologo');

Route::get('/Formulario','formularioController@Formulario')->name('Formulario');
Route::post('/registro-persona','formularioController@registro')->name('registro-persona');

Route::get('/ResultadoAcademico','resultadosController@Academico')->name('ResultadoAcademico');
Route::get('/ResultadoArtes','resultadosController@Artes')->name('ResultadoArtes');
Route::get('/ResultadoDeportista','resultadosController@Deportes')->name('ResultadoDeportista');



//rutas login
//Route::get('/login', 'Auth\LoginController@login')->name('login');

//rutas test
