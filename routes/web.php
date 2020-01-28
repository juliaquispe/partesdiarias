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



Route:: get('/','InicioController@index')->name('inicio');
//rutas para login
Route:: get ('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route:: get ('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route:: post('seguridad/login','Seguridad\LoginController@login')->name('loginpost');

Route:: group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'],function(){
	//rutas para usuario
	Route:: get('usuario','UsuariosController@index')->name('usuario');
	Route:: get('usuario/crear','UsuariosController@create')->name('crearusuario');
	Route:: get('','AdminController@index');

	Route:: post('usuario','UsuariosController@store') ->name('guardarusuario');
	Route:: get('usuario/{id}/editar','UsuariosController@edit')->name ('editarusuario');
	Route:: put('usuario/{id}/editar','UsuariosController@update')->name ('actualizarusuario');
	Route:: delete('usuario/{id}/eliminar','UsuariosController@destroy')->name ('eliminarusuario');
	//rutas para unidad
	Route:: get('unidad','UnidadController@index')->name ('unidad');
	Route:: get('unidad/crear', 'UnidadController@create')->name('crearunidad');
	Route:: post('unidad','UnidadController@store') ->name('guardarunidad');
	Route:: get('unidad/{id}/editar','UnidadController@edit')->name ('editarunidad');
	Route:: put('unidad/{id}/editar','UnidadController@update')->name ('actualizarunidad');
	Route:: delete('unidad/{id}/eliminar','UnidadController@destroy')->name ('eliminarunidad');
	//rutas para tabla rol
	Route:: get('rol','RolController@index')->name ('rol');
	Route:: get('rol/crear','RolController@create')->name ('crearrol');
	Route:: post('rol','RolController@store')->name ('guardarrol');
	Route:: get('rol/{id}/editar','RolController@edit')->name ('editarrol');
	Route:: put('rol/{id}/editar','RolController@update')->name ('actualizarrol');
	Route:: delete('rol/{id}/eliminar','RolController@destroy')->name ('eliminarrol');

});
