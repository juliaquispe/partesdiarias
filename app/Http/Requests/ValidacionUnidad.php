<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUnidad extends FormRequest
{
    public function authorize()
    {
        return true;// va estar false y para ACTIVAR LA VALIDACION ponemos TRUE
    }

    public function rules()
    {
        if($this ->route('id')){
            return [
                'nombre' =>'required|max:60|unique:unidad,nombre,' .$this->route('id'), // PARA PODER EDITAR Y ACTUALIZAR
                'descripcion' =>'nullable|max:300',
                'sigla' =>'required|max:20|unique:unidad,sigla,'.$this->route('id')
            ];
        }
        else{
            return [
                'nombre' =>'required|max:60|unique:unidad,nombre',  //PARA PODER CREAR
                'descripcion' =>'nullable|max:300',
                'sigla' =>'required|max:20|unique:unidad,sigla'
                // 'nombre' =>'required|max:60|unique:unidad,nombre,' .$this->route('id'), // PARA PODER ACTUALIZAR
                // 'descripcion' =>'nullable|max:300',
                // 'sigla' =>'required|max:10|unique:unidad,sigla,'.$this->route('id')
            ];
        }  
    }
}
