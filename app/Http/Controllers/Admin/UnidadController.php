<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUnidad;
use App\Models\Admin\Unidad;


class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Unidad=Unidad::orderBy('id')->get();//PARA LISTAR LOS DATOS DE LA TABLA

       return view('Admin.Unidad.index',compact('Unidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Admin.Unidad.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionUnidad $request)
    {
        $Unidad= new Unidad;
        $Unidad->nombre = $request->nombre;
        $Unidad->descripcion = $request->descripcion;
        $Unidad->sigla = $request->sigla;
        $Unidad-> save();
       // return redirect()->route('admin.unidad')->with('mensaje', 'la unidad fue actualizada');
                            
    //    Unidad::create($request->all());
    //    return redirect('admin/unidad')->with('mensaje','datos guardados');
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
        $Unidd= Unidad::findOrfail($id);
        //dd($unid);
        return view ('admin.unidad.editar', compact('Unidd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionUnidad $request, $id)
    {
        $Unidad= Unidad::findOrFail($id);
        $Unidad->nombre = $request->nombre;
        $Unidad->descripcion = $request->descripcion;
        $Unidad->sigla = $request->sigla;
        $Unidad-> save();
      // return redirect()->route('adminunidad') ->with('mensaje', 'la unidad fue actualizada');
                           
    //     Unidad::findOrFail($id)->update($request->all());
    //    return redirect('admin/unidad')->with('mensaje','datos actualizados');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //$unid=Unidad::destroy($id); //ELIMINA LA FILA de esa id
        //return redirect('admin/unidad')->with('mensaje','eliminado correctamente'); //REDIRRECCIONA A LA LISTA DE LATABLA
        if ($request->ajax()) {
            if (Unidad::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }

    }
}
