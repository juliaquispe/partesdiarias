<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionForm3 extends FormRequest
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
                'tramo'=>'required|max:15',                
                'coordenadas' =>'nullable|max:30',
                'area'=>'required|max:15',
                'infraccion_de'=>'required|max:20',
                'tipo_via'=>'nullable|max:15',
                'unidad_cargo'=>'required|max:20',                
                'denuncia'=>'required|max:20',
                'nombres_infractor' =>'required|max:40',
                'genero' =>'required|max:5|min:5',
                'nro_licencia' => 'nullable|max:15|min:6|unique:form1,ci,'.$this->route('id'),
                'categoria'=>'nullable|max:15',
                'edad'=>'required|integer',
                'g_alcoholico'=>'nullable|max:15',
                'infractor_arest'=>'required|max:2|min:2',
                'tipo_vehiculo'=>'required|max:20',
                'placa'=>'required|max:20',
                't_servicio'=>'nullable|max:15',
                't_castigo'=>'required|max:20',
                'nombre_policia'=>'required|max:40',
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
                'lugar_hecho'=>'required|max:30',
                'tramo'=>'required|max:15',                
                'coordenadas' =>'nullable|max:30',
                'area'=>'required|max:15',
                'infraccion_de'=>'required|max:20',
                'tipo_via'=>'nullable|max:15',
                'unidad_cargo'=>'required|max:20',                
                'denuncia'=>'required|max:20',
                'nombres_infractor' =>'required|max:40',
                'genero' =>'required|max:5|min:5',
                'nro_licencia' => 'nullable|max:15|min:6|unique:form1,ci',
                'categoria'=>'nullable|max:15',
                'edad'=>'required|integer',
                'g_alcoholico'=>'nullable|max:15',
                'infractor_arest'=>'required|max:2|min:2',
                'tipo_vehiculo'=>'required|max:20',
                'placa'=>'required|max:20',
                't_servicio'=>'nullable|max:15',
                't_castigo'=>'required|max:20',
                'nombre_policia'=>'required|max:40',
                'descripcion' =>'required',            ];
        }

    }
}
