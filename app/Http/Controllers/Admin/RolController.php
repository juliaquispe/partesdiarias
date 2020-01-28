<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionRol;
use App\Http\Requests\ValidacionRolEditar;
use App\Models\Admin\Rol;
use App\Models\Seguridad\Usuario;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Roll=Rol::orderBy('id')->get();//PARA LISTAR LOS DATOS DE LA TABLA

        return view('Admin.Rol.index',compact('Roll'));
       // dd($Roll); para hacer prueba de que si esta recuperando datos de la db
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Rol.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionRol $request)
    {
        Rol::create($request->all());
        return redirect('admin/rol')->with('mensaje','datos guardados');
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
        $Rol= Rol::findOrfail($id);
        return view ('admin.rol.editar', compact('Rol'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionRolEditar $request, $id)
    {
        Rol::findOrFail($id)->update($request->all());
        return redirect('admin/rol')->with('mensaje', 'fue actualizado');
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
            $Usuario= Rol::findOrFail($id);
            $Usuario->roles()->detach();
            $Usuario->delete();
            return response()->json(['mensaje' => 'ok']);
        } else{
            abort(404);
        }
        // if ($request->ajax()) {
        //     if (Rol::destroy($id)) {
        //         return response()->json(['mensaje' => 'ok']);
        //     } else {
        //         return response()->json(['mensaje' => 'ng']);
        //     }
        // } else {
        //     abort(404);
        // }
    }
}
