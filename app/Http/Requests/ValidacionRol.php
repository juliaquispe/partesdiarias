<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionRol extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this ->route('id')){
            return [
                'name' =>'required|max:20|unique:rol,name,' .$this->route('id')//PARA PODER EDITAR Y ACTUALIZAR
            ];
        }
        else{
            return [
                'name' =>'required|max:20|unique:rol,name', // para poder crear
                //'name' =>'required|max:10|unique:unidad,name,' .$this->route('id'), // PARA PODER ACTUALIZAR
            ];
        } 
    }
}
