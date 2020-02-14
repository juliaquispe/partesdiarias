<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use App\Models\Admin\Rol;
use App\Models\Seguridad\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Usuario=Usuario::orderBy('id')->get();
        // return view('Admin.Usuario.index',compact('Usuario'));
        $Usuario=Usuario::with('roles:id,name')->orderBy('id')->get(); //roles es el nombre de la funcion del modelo de relacion de * a *
        return view('Admin.Usuario.index',compact('Usuario'));
    //   dd($Usuario);// prueba

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rols = Rol::orderBy('id')->pluck('name','id')-> toArray(); //pluck sirve para escoger los campos que quieres 
       return view('Admin.Usuario.crear', compact('rols'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionUsuario $request) // store es para almacenar en la bd  lo que se edito
    {
        $Usuario = Usuario::create($request->all());
        $Usuario->roles()->attach($request->rol_id); //attach  para agregar en la bd
        return redirect('admin/usuario')->with('mensaje','datos guardados');
    //     Usuario::create($request->all());
    //    return redirect('admin/usuario')->with('mensaje','datos guardados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rols= Rol::orderBy('id')->pluck('name', 'id')->toArray();
        $Usuario= Usuario::with('roles')->findOrfail($id);
        return view ('admin.usuario.editar', compact('Usuario', 'rols'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionUsuario $request, $id)
    {
        $Usuario= Usuario::findOrFail($id);
        $Usuario->update(array_filter($request->all()));
        $Usuario->roles()->sync($request->rol_id);
        return redirect('admin/usuario')->with('mensaje','datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
