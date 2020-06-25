<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionForm1 extends FormRequest
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
                'coordenadas' =>'nullable|max:30',
                'nombres_auxiliado' =>'required|max:40',
                'ci' => 'nullable|min:6|max:15|unique:form1,ci,'.$this->route('id'),
                'nacido_en' =>'nullable|min:4|max:20',
                'edad' =>'nullable|integer|min:1|max:100',
                'genero' =>'required|max:5',
                'nombre_policia' =>'required|max:40',
                'lugar_hecho'=>'required|max:40',
                'descripcion' =>'required',
            ];
        }
        else{
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
                'coordenadas' =>'nullable|max:30',
                'nombres_auxiliado' =>'required|max:40',
                'ci' => 'nullable|min:6|max:15|unique:form1,ci',
                'nacido_en' =>'nullable|min:4|max:20',
                'edad' =>'nullable|integer|min:1|max:100',
                'genero' =>'required|max:5',
                'nombre_policia' =>'required|max:40',
                'lugar_hecho'=>'required|max:40',
                'descripcion' =>'required',
            ];
        }
    }
}
