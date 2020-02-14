<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Unidad;
use Illuminate\Contracts\Session\Session;

class Personal extends Model
{
    protected $table = "personal";
    protected $fillable= [
        'nombre', 'apellido', 'ci', 'celular', 'cargo', 'fecha_nac', 'unidad_id', 'foto'
    ]; //PARA LLENAR DESDE UN FORMULARIO
  
    public function unidad()
    {
        return $this->belongsTo(Unidad::class); //MUCHOS PERSONALES PERTENECEN A UNA UNIDAD
    }
    
}
