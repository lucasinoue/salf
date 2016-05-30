<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    // Put all your routes inside here.

});

Route::post('oauth/access_token', function(){
    return Response::json(Authorizer::issueAccessToken());
});

Route::group(['middleware' => 'oauth'], function() {

	//departamentos

});

Route::group(['middleware' => 'cors'], function() {

	//departamentos
	Route::resource('departamento', 'DepartamentoController', ['except' => ['create', 'edit']]);

});


	//Route::resource('departamento', 'DepartamentoController', ['except' => ['create', 'edit']]);
	Route::resource('sala', 'SalaController', ['except' => ['create', 'edit']]);
	Route::resource('motivo', 'MotivoController');
	Route::resource('incidencia', 'IncidenciaController');



Route::get('/', function () {
    return view('welcome');
});
