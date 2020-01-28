<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
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
                'usuario' =>'required|max:40|unique:usuario,usuario,'.$this->route('id'), //PARA PODER ediatar y actualizar 
                'nombre' =>'required|max:100',
                'apellido' =>'required|max:100',
                'email' =>'required|email|max:100|unique:usuario,email,'.$this->route('id'),
                'password' =>'nullable|min:5', // ponemos nullable para la validacion del usuario de lado del servidor
                're_password' =>'nullable|required_with:password|same:password', // ponemos nullable pero si existe datos en pasword este campo se vuelve requerido, para la validacion del usuario de lado del servidor
                'rol_id'=>'required|integer'
            ];
        }
        else{
                return [
                    'usuario' =>'required|max:40|unique:usuario,usuario',  //PARA PODER CREAR Usuarios
                    'nombre' =>'required|max:100',
                    'apellido' =>'required|max:100',
                    'email' =>'required|email|max:100|unique:usuario,email',
                    'password' =>'required|min:5',
                    're_password' =>'required|same:password',
                    'rol_id'=>'required|integer'
                ];
            }
 }
}
