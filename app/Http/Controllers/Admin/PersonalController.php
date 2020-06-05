<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionPersonal;
use App\Models\Admin\Unidad;
use Illuminate\Support\Facades\Storage;

class PersonalController extends Controller
{
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
 
    public function store(ValidacionPersonal $request)
    {
        if($foto=Personal::setFoto($request->foto_up))
            $request->request->add(['foto'=>$foto]);
        Personal::create($request->all());
        return redirect('admin/personal')->with('mensaje', 'personal creado correctamente');    
        // dd($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Unidad= Unidad::orderBy('id')->pluck('nombre', 'id')->toArray();
        $Personal= Personal::with('unidad')->findOrFail($id);
        return view('admin.personal.editar', compact('Personal', 'Unidad'));
    }
    public function update(ValidacionPersonal $request, $id)
    {
        // $Personal= Personal:: findOrFail($id);
        // $Personal->update(array_filter($request->all()));
        // $Personal->unidad()->sync($request->unidad_id); // sync es para actualizar
        // return redirect('admin/personal')->with('mensaje','el personal fue actualizado');
        $Personal= Personal::findOrFail($id);
        if($foto=Personal::setFoto($request->foto_up, $Personal->foto))
        $request->request->add(['foto'=>$foto]);
        $Personal->update($request->all());
        return redirect('admin/personal')->with('mensaje','datos actualizados');
    }

    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            $personal=Personal::findOrFail($id);
            if (Personal::destroy($id)) {
                Storage::disk('public')->delete("Datos/Fotos/Personal/$personal->foto");  
              return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
    
}
