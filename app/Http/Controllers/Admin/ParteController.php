<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionForm1;
use App\Http\Requests\ValidacionForm2;
use App\Http\Requests\ValidacionForm3;
use App\Models\Admin\Form1;
use App\Models\Admin\Form2;
use App\Models\Admin\Form3;
use App\Models\Admin\Formulario;
use App\Models\Admin\Personal;

class ParteController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        session_start();
        ob_start();
            $form_id=$_SESSION['form_id'];
            $per_id=$_SESSION['per_id'];
        $Formulario=Formulario::findOrfail($form_id);
        $Personal=Personal::findOrfail($per_id);
        if($Formulario->id==1){
            return view ('Admin.Partes.Formulario1.crear', compact('Formulario','Personal'));
        }
        if($Formulario->id==2){
            return view ('Admin.Partes.Formulario2.crear', compact('Formulario','Personal'));
        }
        if($Formulario->id==3){
            return view ('Admin.Partes.Formulario3.crear', compact('Formulario','Personal'));
        }
    }

    public function store1(ValidacionForm1 $request)
    {
        //dd($request->all());
        Form1::create($request->all());
        return redirect('formulario')->with('mensaje','datos guardados');
    }
    public function store2(ValidacionForm2 $request)
    {
        //dd($request->all());
        Form2::create($request->all());
        return redirect('formulario')->with('mensaje','datos guardados');
    }
    public function store3(ValidacionForm3 $request)
    {
        //dd($request->all());
        Form3::create($request->all());
        return redirect('formulario')->with('mensaje','datos guardados');
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
