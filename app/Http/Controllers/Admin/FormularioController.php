<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionFormulario;
use App\Models\Admin\Formulario;
use App\Models\Admin\Personal;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    public function index()
    {
        $Formulario=Formulario::orderBy('id')->get();
        return view('Admin.Formulario.index',compact('Formulario'));
    }

    public function create()
    {
        return view('Admin.Formulario.crear');
    }

    public function store(ValidacionFormulario $request)
    {
        Formulario::create($request->all());
        return redirect('admin/formulario')->with('mensaje','formulario guardado');     
    }

    public function edit($id)
    {
        $Formulario= Formulario::findOrfail($id);
        return view ('admin.formulario.editar', compact('Formulario'));
    }

    public function update(ValidacionFormulario $request, $id)
    {
        Formulario::findOrFail($id)->update($request->all());
        return redirect('admin/formulario')->with('mensaje', 'actualizado exitosamente');
    }

    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if (Formulario::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }

    public function crear_veri($id)
    {   $form=Formulario::findOrfail($id);
        return view('Admin.Formulario.crear_veri', compact('form'));
    }
    public function verificar(Request $request){
        $ci=$request->ci; //el ci q ingresa el q esta subiendo el parte
        $vec=DB::select("SELECT id FROM personal WHERE ci='$ci'"); //$vec agarra el id q correspond el ci si esq hubiese
        if($vec==null){
            return redirect('formulario')->with('mensajeerror', 'no esta registrado en el sistema');
        }
        else{
            $form_id=$request->form_id;          
            $id=$vec[0]->id;
            $Personal=Personal::findOrfail($id);
            session_start();
            ob_start();
            $_SESSION['form_id']=$form_id;
            $_SESSION['per_id']=$id;
            return view ('Admin.Partes.datos', compact('Personal'));
            
            
        }
    }

}
