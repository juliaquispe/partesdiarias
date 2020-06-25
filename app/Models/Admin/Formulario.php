<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = "formulario";
    protected $fillable= [
        'nombre', 'codigo', 'descripcion'
    ]; 
}
