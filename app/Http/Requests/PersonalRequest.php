<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonalRequest extends Request
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
            'rut'               => 'required|is_valid_rut',
            'nombre'            => 'required',
            'apellido_paterno'  => 'required',
            'apellido_materno'  => 'required',
            'correo'            => 'required|email',
            'telefono'          => 'required|digits:9|numeric',

        ];
    }
}
