<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUnidad;
use App\Models\Admin\Unidad;
use Barryvdh\DomPDF\Facade as PDF;

class UnidadController extends Controller
{
    public function index()
    {
        $Unidad=Unidad::orderBy('id')->get();//PARA LISTAR LOS DATOS DE LA TABLA
        return view('Admin.Unidad.index',compact('Unidad'));
    }

    public function create()
    {
          return view('Admin.Unidad.crear');
    }

    public function store(ValidacionUnidad $request)
    {
        // $Unidad= new Unidad;
        // $Unidad->nombre = $request->nombre;
        // $Unidad->descripcion = $request->descripcion;
        // $Unidad->sigla = $request->sigla;
        // $Unidad-> save();
        // return redirect()->route('admin.unidad')->with('mensaje', 'la unidad fue actualizada');
                            
       Unidad::create($request->all());
       return redirect('admin/unidad')->with('mensaje','datos guardados');
    }

    public function lista($id)
    {
        $Unidad=Unidad::findOrfail($id); //la unidad agarra los datos solo de esa id 
        $Personal= Personal::orderBy('id')->get(); // esta variable agarra todos los datos de personal
        return view('Admin.Unidad.listaunidad', compact('Personal', 'Unidad'));
    }

    public function edit($id)
    {
        $Unidd= Unidad::findOrfail($id);
        //dd($unid); //PARA QUE MUESTRE SI LOS DATOS SE ESTAN RECUPETANDO
        return view ('admin.unidad.editar', compact('Unidd'));
    }

    public function update(ValidacionUnidad $request, $id)
    {
        // $Unidad= Unidad::findOrFail($id);
        // $Unidad->nombre = $request->nombre;
        // $Unidad->descripcion = $request->descripcion;
        // $Unidad->sigla = $request->sigla;
        // $Unidad-> save();
        // return redirect()->route('adminunidad') ->with('mensaje', 'la unidad fue actualizada');
                           
        Unidad::findOrFail($id)->update($request->all());
        return redirect('admin/unidad')->with('mensaje','datos actualizados');
      
    }
    
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
    public function PDFunidad($id)
    {   
        $Personal=Personal::all();
        $Unidad=Unidad::findOrFail($id);
        $PDF= PDF:: loadview('Admin.Reportes.listas', compact('Personal', 'Unidad'));
        return $PDF->stream('lista.pdf');
    }
}