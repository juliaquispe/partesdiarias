<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Rol;
use App\Models\Admin\Unidad;
use App\Models\Seguridad\Usuario;
use App\Models\Admin\Personal;

class AdminController extends Controller
{
    public function index()
    {
        $A=Usuario:: all()->count();
        $B=Personal:: all()->count();
        $C=Unidad:: all()->count();
        $D=Rol:: all()->count();
        return view('Admin.Admin.index', compact('A', 'B', 'C', 'D')); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
