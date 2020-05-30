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
	Route:: get('usuario/crear','UsuariosController@create')->name('crearusuario')->middleware('permisocrear');
	Route:: get('','AdminController@index');
	Route:: post('usuario','UsuariosController@store') ->name('guardarusuario');
	Route:: get('usuario/{id}/editar','UsuariosController@edit')->name ('editarusuario')->middleware('permisoeditar');
	Route:: put('usuario/{id}/editar','UsuariosController@update')->name ('actualizarusuario');
	Route:: delete('usuario/{id}/eliminar','UsuariosController@destroy')->name ('eliminarusuario')->middleware('permisoeliminar');
	//rutas para usuario-rol
	Route:: get('usuariorol','UsuarioRolController@index')->name ('usuariorol');
	Route:: post('usuariorol','UsuarioRolController@store')->name ('usuariorolestado');

	//rutas para unidad
	Route:: get('unidad','UnidadController@index')->name ('unidad');
	Route:: get('unidad/crear', 'UnidadController@create')->name('crearunidad')->middleware('permisocrear');
	Route:: post('unidad','UnidadController@store') ->name('guardarunidad');
	Route:: get('unidad/{id}/editar','UnidadController@edit')->name ('editarunidad')->middleware('permisoeditar');
	Route:: put('unidad/{id}/editar','UnidadController@update')->name ('actualizarunidad');
	Route:: delete('unidad/{id}/eliminar','UnidadController@destroy')->name ('eliminarunidad')->middleware('permisoeliminar');
	//rutas para tabla rol
	Route:: get('rol','RolController@index')->name ('rol');
	Route:: get('rol/crear','RolController@create')->name ('crearrol')->middleware('permisocrear');
	Route:: post('rol','RolController@store')->name ('guardarrol');
	Route:: get('rol/{id}/editar','RolController@edit')->name ('editarrol')->middleware('permisoeditar');
	Route:: put('rol/{id}/editar','RolController@update')->name ('actualizarrol');
	Route:: delete('rol/{id}/eliminar','RolController@destroy')->name ('eliminarrol')->middleware('permisoeliminar');
	//rutas para tabla personal
	Route:: get('personal', 'PersonalController@index')->name ('personal');
	Route:: get('personal/crear','PersonalController@create')->name ('crearpersonal')->middleware('permisocrear');
	Route:: post('personal','PersonalController@store')->name ('guardarpersonal');
	Route:: get('personal/{id}/editar','PersonalController@edit')->name ('editarpersonal')->middleware('permisoeditar');
	Route:: put('personal/{id}','PersonalController@update')->name ('actualizarpersonal');
	Route:: delete('personal/{id}/eliminar','PersonalController@destroy')->name ('eliminarpersonal')->middleware('permisoeliminar');
});
