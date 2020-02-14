<?php

namespace App\Models\Admin;

use App\Admin\Personal;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = "unidad";
    protected $fillable= [
        'nombre', 'descripcion', 'sigla'
    ]; //PARA LLENAR DESDE UN FORMULARIO
  
    // public function personales()
    // {
    //     return $this->hasMany(Personal::class);
    // }
}
