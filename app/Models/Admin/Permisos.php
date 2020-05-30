<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $table = "permiso";
    protected $fillable= [
        'usuario_id', 'add', 'edit', 'remove'
    ]; //PARA LLENAR DESDE UN FORMULARIO
    
    // //muteytor se usa para modificar un valor antes de ser asignado y debe empezar con set y finalizar con Atribute
    // public function setaddAtribute($value){
    //     $this->attributes['add']=($value== 'on')? '1':'0';
    // }
}