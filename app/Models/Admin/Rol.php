<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    protected $fillable= [
        'name'
    ]; //PARA LLENAR DESDE UN FORMULARIO
  
}
