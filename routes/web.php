<?php

use Illuminate\Support\Facades\Route;

Route:: get('/','InicioController@index')->name('inicio');
//rutas para login
Route:: get ('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route:: get ('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route:: post('seguridad/login','Seguridad\LoginController@login')->name('loginpost');
//rutas form para invitados
Route:: get('formulario', 'Admin\FormularioController@index')->name ('formulario');
Route:: get('formulario/crear_veri/{id}','Admin\FormularioController@crear_veri')->name ('crear_veri');
Route:: post('formulario/verificar','Admin\FormularioController@verificar')->name ('verificar_per');
Route:: get('formulario/crearparte', 'Admin\ParteController@create')->name ('crear_parte');
Route:: post('parte1','Admin\ParteController@store1')->name ('guardar_F1');
Route:: post('parte2','Admin\ParteController@store2')->name ('guardar_F2');
Route:: post('parte3','Admin\ParteController@store3')->name ('guardar_F3');

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
	Route:: get('usuario/{id}/estado1','UsuarioRolController@estado1')->name ('activo')->middleware('permisoeditar');
	Route:: get('usuario/{id}/estado0','UsuarioRolController@estado0')->name ('inactivo')->middleware('permisoeditar');

	//rutas para unidad
	Route:: get('unidad','UnidadController@index')->name ('unidad');
	Route:: get('unidad/crear', 'UnidadController@create')->name('crearunidad')->middleware('permisocrear');
	Route:: post('unidad','UnidadController@store') ->name('guardarunidad');
	Route:: get('unidad/{id}/editar','UnidadController@edit')->name ('editarunidad')->middleware('permisoeditar');
	Route:: put('unidad/{id}/editar','UnidadController@update')->name ('actualizarunidad');
	Route:: delete('unidad/{id}/eliminar','UnidadController@destroy')->name ('eliminarunidad')->middleware('permisoeliminar');
	//rutas para lista de personal de unidad
	Route:: get('unidad/{id}/lista','UnidadController@lista')->name ('verunidad');
	Route:: get('unidad/{id}/pdfunidad','UnidadController@PDFunidad')->name ('pdfunidad');
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
	//rutas para tabla formulaio1
	Route:: get('formulario1', function(){
		return view('Admin/Partes/Formulario1/index');
	});
	//rutas para tabla formulaio2
	Route:: get('formulario2', function(){
		return view('Admin/Partes/Formulario2/index');
	});
		//rutas para tabla formulaio2
	Route:: get('formulario3', function(){
		return view('Admin/Partes/Formulario3/index');
	});
	//rutas para tabla formulario
		
		Route:: get('formulario/crear','FormularioController@create')->name ('crearformulario')->middleware('permisocrear');
		Route:: post('formulario','FormularioController@store')->name ('guardarformulario');
		Route:: get('formulario/{id}/editar','FormularioController@edit')->name ('editarformulario')->middleware('permisoeditar');
		Route:: put('formulario/{id}','FormularioController@update')->name ('actualizarformulario');
		Route:: delete('formulario/{id}/eliminar','FormularioController@destroy')->name ('eliminarformulariol')->middleware('permisoeliminar');


		
});
