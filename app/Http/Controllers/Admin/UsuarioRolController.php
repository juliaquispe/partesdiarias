<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Rol;
use App\Models\Seguridad\Usuario;

class UsuarioRolController extends Controller
{
    public function index()
    {
        $UsuarioRol=Usuario ::with('roles:id,name,estado')->orderBy('id')->get();//PARA LISTAR LOS DATOS DE LA TABLA
        return view('Admin.UsuarioRol.index',compact('UsuarioRol'));
    }

    public function create()
    {
        $rols = Rol::orderBy('id')->pluck('name','id')-> toArray();
        return view('Admin.UsuarioRol.crear', compact('rols'));
    }
 
    public function store(Request $request)
    {
        if($request->ajax()){
            if($request->input('estado')==1){

         return response()->json(['respuesta'=>'Rol activado']);
            }else{
                return response()->json(['respuesta'=>'Rol desactivo']);
            }
        } else{
                abort(404);
            }
    }
    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
