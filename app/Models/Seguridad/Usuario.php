<?php

namespace App\Models\Seguridad;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $remember_token =false;
    protected $table ='usuario';
    protected $fillable =['usuario', 'nombre', 'apellido', 'email', 'password'];
    protected $guarded =['id'];

    public function setSession(){
    	Session::put([
    		'usuario'=>$this->usuario,
    		'id_usuario'=>$this->id,
    		'nombre_usuario'=>$this->nombre,
    		'apellido'=>$this->apellido
    	]);
    }
}



