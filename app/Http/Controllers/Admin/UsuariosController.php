<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use App\Models\Admin\Permisos;
use App\Models\Admin\Rol;
use App\Models\Seguridad\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        // $Usuario=Usuario::orderBy('id')->get();
        // return view('Admin.Usuario.index',compact('Usuario'));
        $Usuario=Usuario::with('roles:id,name')->orderBy('id')->get(); //roles es el nombre de la funcion del modelo de relacion de * a *
        return view('Admin.Usuario.index',compact('Usuario'));
    //   dd($Usuario);// prueba

    }
    
    public function create()
    {
        $rols = Rol::orderBy('id')->pluck('name','id')-> toArray(); //pluck sirve para escoger los campos que quieres 
        return view('Admin.Usuario.crear', compact('rols'));

    }

    public function store(ValidacionUsuario $request) // store es para almacenar en la bd  lo que se edito
    {
        // dd($request->all()); // es para ver la prueba imprimir en verde
        $Usuario = Usuario::create($request->all());
        $Usuario->roles()->attach($request->rol_id); //attach  para agregar en la bd

        $Permiso= new Permisos($request->all());
        $Permiso->usuario_id=$Usuario->id;
        if($request->añadir=="on")
            $add =1;
        else
            $add =0;
        if($request->editar=="on")
            $edit =1;
        else
            $edit =0;
        if($request->eliminar=="on")
            $remove =1;
        else
            $remove=0;
        $Permiso->add=$add;
        $Permiso->edit=$edit;
        $Permiso->remove=$remove;
        $Permiso->save();

        return redirect('admin/usuario')->with('mensaje','datos guardados');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $rols= Rol::orderBy('id')->pluck('name', 'id')->toArray();
        $Usuario= Usuario::with('roles')->findOrfail($id);
        return view ('admin.usuario.editar', compact('Usuario', 'rols'));
    }

    public function update(ValidacionUsuario $request, $id)
    {
        $Usuario= Usuario::findOrFail($id);
        $Usuario->update(array_filter($request->all())); // array_filter es para borrar los campos vacios en el request
        $Usuario->roles()->sync($request->rol_id);
        
        if($request->añadir=="on")
            $add =1;
        else
            $add =0;
        if($request->editar=="on")
            $edit =1;
        else
            $edit =0;
        if($request->eliminar=="on")
            $remove =1;
        else
            $remove=0;
        $Usuario->permiso()->update([
            'add'=>$add,
            'edit'=>$edit,
            'remove'=>$remove
        ]);
        return redirect('admin/usuario')->with('mensaje','datos actualizados');
    }

    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if (Usuario::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
