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

Route::group(['middleware' => 'cors'], function() {

	//departamentos
	Route::post('departamento', 'DepartamentoController@store', ['except' => ['create', 'edit']]);
	Route::get('departamento', 'DepartamentoController@index', ['except' => ['create', 'edit']]);
	Route::get('departamento/{id}', 'DepartamentoController@show', ['except' => ['create', 'edit']]);
	Route::put('departamento/{id}', 'DepartamentoController@update', ['except' => ['create', 'edit']]);
	Route::delete('departamento/{id}', 'DepartamentoController@destroy', ['except' => ['create', 'edit']]);

	//motivo
	Route::post('motivo', 'MotivoController@store', ['except' => ['create', 'edit']]);
	Route::get('motivo', 'MotivoController@index', ['except' => ['create', 'edit']]);
	Route::get('motivo/{id}', 'MotivoController@show', ['except' => ['create', 'edit']]);
	Route::put('motivo/{id}', 'MotivoController@update', ['except' => ['create', 'edit']]);
	Route::delete('motivo/{id}', 'MotivoController@destroy', ['except' => ['create', 'edit']]);


	//incidencia
	Route::post('incidencia', 'IncidenciaController@store', ['except' => ['create', 'edit']]);
	Route::get('incidencia', 'IncidenciaController@index', ['except' => ['create', 'edit']]);
	Route::get('incidencia/{id}', 'IncidenciaController@show', ['except' => ['create', 'edit']]);
	Route::put('incidencia/{id}', 'IncidenciaController@update', ['except' => ['create', 'edit']]);
	Route::delete('incidencia/{id}', 'IncidenciaController@destroy', ['except' => ['create', 'edit']]);


	Route::post('sala', 'SalaController@store', ['except' => ['create', 'edit']]);
	Route::get('sala', 'SalaController@index', ['except' => ['create', 'edit']]);
	Route::get('sala/{id}', 'SalaController@show', ['except' => ['create', 'edit']]);
	Route::put('sala/{id}', 'SalaController@update', ['except' => ['create', 'edit']]);
	Route::delete('sala/{id}', 'SalaController@destroy', ['except' => ['create', 'edit']]);


});



	//Route::resource('departamento', 'DepartamentoController', ['except' => ['create', 'edit']]);
	//Route::resource('motivo', 'MotivoController');
	


Route::get('/', function () {
    return view('welcome');
});
