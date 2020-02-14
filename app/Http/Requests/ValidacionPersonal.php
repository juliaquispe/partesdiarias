<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPersonal extends FormRequest
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
        if($this ->route('id'))
        {
            return [
                'nombre' =>'required|max:50',
                'apellido' =>'required|max:50',
                'ci' =>'required|max:20|unique:personal,ci,'.$this->route('id'),
                'celular' =>'nullable|max:30|unique:personal,celular,'.$this->route('id'), 
                'cargo' =>'required|max:60',
                'unidad_id'=>'required|integer',
                'foto'=>'nullable'
            ];
        }
        else{
            return [
                'nombre' =>'required|max:50',
                'apellido' =>'required|max:50',
                'ci' =>'required|max:20|unique:personal,ci',
                'celular' =>'nullable|max:30|unique:personal,celular', 
                'cargo' =>'required|max:60', 
                'unidad_id'=>'required|integer',
                'foto'=>'nullable'
            ];
        }
            
    }
}
