<?php

/*App\User::create([
	'nombre' => 'Lorena',
	'email' => 'lorena@hotmail.com',
	'password' => bcrypt('lorena')
]);*/



Route::get('/' , ['as' => 'home' , 'uses' => 'HomeController@home']);

Route::resource('gasto' , 'GastoController');

Route::resource('tipogasto' , 'TipoGastoController');

Route::resource('tiposervicio' , 'TipoServicioController');



//Login


Route::get('login', 'Auth\loginController@showLoginForm');
Route::post('login', 'Auth\loginController@login');
Route::get('logout', 'Auth\loginController@logout'); 

//---------------------


Route::resource('usuarios', 'UsuariosController');
