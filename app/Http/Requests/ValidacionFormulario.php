<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionFormulario extends FormRequest
{
    public function authorize()
    {
        return true; // para Activar Validadcion
    }

    public function rules()
    {
        if($this ->route('id'))
        {
            return [
                'nombre' =>'required|max:80',
                'codigo' =>'required|min:5|max:20|unique:formulario,codigo,'.$this->route('id'),
                'descripcion'=>'nullable|min:5'
            ];
        }
        else{
            return [
                'nombre' =>'required|max:80',
                'codigo' =>'required|min:5|max:20|unique:formulario,codigo',
                'descripcion'=>'nullable|min:5'
            ];
        }
    }
}
