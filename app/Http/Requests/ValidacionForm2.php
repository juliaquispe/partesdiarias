<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionForm2 extends FormRequest
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
                'personal_id' =>'required|integer',
                'formulario_id' =>'required|integer',
                'fecha' =>'required|date',
                'hora'=>'nullable',
                'municipio' =>'required|max:50',
                'zona' =>'nullable|max:40',
                'distrito' =>'nullable|max:4',
                'callep' =>'required|max:35',
                'calles' =>'nullable|max:35',
                'lugar_hecho'=>'required|max:30',
                'coordenadas' =>'nullable|max:30',
                'denuncia'=>'required|max:20',
                'nombres_infractor' =>'required|max:40',
                'genero' =>'required|max:5|min:5',
                'ci' => 'nullable|max:15|min:6|unique:form1,ci,'.$this->route('id'),
                'expedida_en' =>'required|max:20|min:4',
                'edad'=>'nullable|integer',
                'nacionalidad'=>'nullable|max:',
                'temperancia'=>"required|max:20",
                'estado_civil'=>'nullable|max:15',
                'ocupacion'=>'nullable|max:20',
                'infractor_arest'=>'required|max:2|min:2',
                'sancion'=>'nullable|max:30',
                'estado'=>'required|max:17',
                'descripcion' =>'required',
            ];
        }
        else{
            return [
                'personal_id' =>'required|integer',
                'personal_id' =>'required|integer',
                'formulario_id' =>'required|integer',
                'fecha' =>'required|date',
                'hora'=>'nullable',
                'municipio' =>'required|max:50',
                'zona' =>'nullable|max:40',
                'distrito' =>'nullable|max:4',
                'callep' =>'required|max:35',
                'calles' =>'nullable|max:35',
                'lugar_hecho'=>'required|max:30',
                'coordenadas' =>'nullable|max:30',
                'denuncia'=>'required|max:20',
                'nombres_infractor' =>'required|max:40',
                'genero' =>'required|max:5|min:5',
                'ci' => 'nullable|max:15|min:6|unique:form1,ci',
                'expedida_en' =>'required|max:20|min:4',
                'temperancia'=>"required|max:20",
                'estado_civil'=>'nullable|max:15',
                'ocupacion'=>'nullable|max:20',
                'infractor_arest'=>'required|max:2|min:2',
                'sancion'=>'nullable|max:30',
                'estado'=>'required|max:17',
                'descripcion' =>'required',
            ];
        }

    }
}
