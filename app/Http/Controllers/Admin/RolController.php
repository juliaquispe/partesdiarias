<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionRol;
use App\Models\Admin\Rol;

class RolController extends Controller
{
    public function index()
    {
       $Roll=Rol::orderBy('id')->get();//PARA LISTAR LOS DATOS DE LA TABLA

        return view('Admin.Rol.index',compact('Roll'));
       // dd($Roll); para hacer prueba de que si esta recuperando datos de la db
    }

    public function create()
    {
        return view('Admin.Rol.crear');
    }

    public function store(ValidacionRol $request)
    {
        Rol::create($request->all());
        return redirect('admin/rol')->with('mensaje','datos guardados');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Rol= Rol::findOrfail($id);
        return view ('admin.rol.editar', compact('Rol'));

    }

    public function update(ValidacionRol $request, $id)
    {
        Rol::findOrFail($id)->update($request->all());
        return redirect('admin/rol')->with('mensaje', 'fue actualizado');
    }

    public function destroy(Request $request, $id)
    {
        // if ($request->ajax()) {
        //     $Usuario= Rol::findOrFail($id);
        //     $Usuario->roles()->detach();
        //     $Usuario->delete();
        //     return response()->json(['mensaje' => 'ok']);
        // } else{
        //     abort(404);
        // }
        if ($request->ajax()) {
            if (Rol::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
