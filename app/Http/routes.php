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



Route::get('/', 'HomeController@index');

resource('tipoproductos','TipoProductoController');

resource('vender','VenderController');

resource('productos','ProductoController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('productos/{codigoproducto}/destroy',['productos'=>'VenderController@destroy',
	'as'=> 'producto.vender'
	]);




