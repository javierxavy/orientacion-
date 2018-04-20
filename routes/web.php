<?php

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

});

//rutas login
//Route::get('/login', 'Auth\LoginController@login')->name('login');

//rutas test
