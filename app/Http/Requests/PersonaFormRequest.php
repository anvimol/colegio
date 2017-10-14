<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
        return [
            'nombre'           =>'required|max:100|min:3',
            'apellidos'        =>'required|max:100|min:3',
            'direccion'        =>'required|max:100',
            'poblacion'        =>'required|max:100',
            'codigo_postal'    =>'required|max:100',
            'provincia'        =>'required|max:100',
            'telefono'         =>'required|max:15',
            'fecha_nacimiento' => 'required',
            'dni'              => 'required|max:9',
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
