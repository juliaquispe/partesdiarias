<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Permisos;
use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    protected $remember_token =false;
    protected $table ='usuario';
    protected $fillable =['usuario', 'nombre', 'apellido', 'email', 'password'];


    public function roles()
    {
        return $this->belongsToMany(Rol::class,'usuario_rol'); // es la relacion de mucho a muchos entre usuario u rol
    }

    public function permiso()
    {
        return $this->hasOne(Permisos::class);
    }

    public function setSession($roles){  //agarra los datos del que inicia sesion
            
        if(count ($roles)==1){
            
            Session::put
        ([
           
            'rol_id'=>$roles[0]['id'],
            'rol_name'=>$roles[0]['name'],
            'usuario'=>$this->usuario,
            'usuario_id'=>$this->id,
    		'nombre_usuario'=>$this->nombre,
            'apellido'=>$this->apellido,
            'email_usuario'=>$this->email
        ]);

      
    }
}
    public function setPasswordAttribute($pass)//funcion de laravel para encriptar el password
    {
        $this->attributes['password']= Hash::make($pass);
    }
}


