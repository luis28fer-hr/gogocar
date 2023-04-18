<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class perfilValidar extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'matricula' => ['required', 'numeric'],
            'correo' => ['required', 'email'],
            'nombre' => ['required', 'string'],
            'paterno' => ['required', 'string'],
            'materno' => ['required', 'string'],
            'telefono' => ['required', 'numeric', 'digits_between:10,10']
        ];
    }
}
