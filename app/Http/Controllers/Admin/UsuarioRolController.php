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
    
    public function estado0($id)
    {
        $Estado= Usuario::findOrfail($id);
        $Estado->estado=0;
        $Estado->save();
        return redirect('admin/usuariorol');
    }

    public function estado1($id)
    {
        $Estado= Usuario::findOrfail($id);
        $Estado->estado=1;
        $Estado->save();
        return redirect('admin/usuariorol');
    }
}
