<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = "unidad";
    protected $fillable= [
        'nombre', 'descripcion', 'sigla'
    ]; //PARA LLENAR DESDE UN FORMULARIO
  

}
