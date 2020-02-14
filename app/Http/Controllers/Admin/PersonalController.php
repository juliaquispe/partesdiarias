<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionPersonal;
use App\Models\Admin\Unidad;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Personal= Personal::with('unidad:id,nombre')->get();
        return view('Admin.Personal.index', compact('Personal'));
        //dd($Personal); ejemplo 
    }
    public function create()
    {
        $Unidad = Unidad::orderBy('id')->pluck('nombre','id')-> toArray();
        //$Personal = Unidad ::orderBy('id')->pluck('nombre')-> toArray(); //pluck sirve para escoger los campos que quieres
       return view('Admin.Personal.crear', compact('Unidad'));   
       //dd($Personal);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionPersonal $request)
    {
       Personal::create($request->all());
       return redirect('admin/personal')->with('mensaje', 'personal creado correctamente');
         
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
        $Unidad= Unidad::orderBy('id')->pluck('nombre', 'id')->toArray();
        $Personal= Personal::with('unidad')->findOrFail($id);
        return view('admin.personal.editar', compact('Personal', 'Unidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionPersonal $request, $id)
    {
        // $Personal= Personal:: findOrFail($id);
        // $Personal->update(array_filter($request->all()));
        // $Personal->unidad()->sync($request->unidad_id); // sync es para actualizar
        // return redirect('admin/personal')->with('mensaje','el personal fue actualizado');
        Personal::findOrFail($id)->update($request->all());
        return redirect('admin/personal')->with('mensaje','datos actualizados');
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
            if (Personal::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
