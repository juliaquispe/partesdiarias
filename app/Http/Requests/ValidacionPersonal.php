<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPersonal extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this ->route('id'))
        {
            return [
                'nombre' =>'required|max:50',
                'apellido' =>'required|max:50',
                'ci' =>'required|min:6|max:20|unique:personal,ci,'.$this->route('id'),
                'celular' =>'nullable|max:30|unique:personal,celular,'.$this->route('id'), 
                'item'=>'|min:1|max:5|unique:personal,item,'.$this->route('id'),
                'cargo' =>'required|max:60',
                'unidad_id'=>'required|integer',
                'sexo'=>'required|max:9|min:8',
                'foto_up'=>'nullable|image'
            ];
        }
        else{
            return [
                'nombre' =>'required|max:50',
                'apellido' =>'required|max:50',
                'ci' =>'required|max:20|unique:personal,ci',
                'celular' =>'nullable|max:30|unique:personal,celular',
                'item'=>'|min:1|max:5|unique:personal,item',
                'cargo' =>'required|max:60', 
                'unidad_id'=>'required|integer',
                'sexo'=>'required|min:6|max:9|min:8',
                'foto_up'=>'nullable|image'
            ];
        }
            
    }
}
