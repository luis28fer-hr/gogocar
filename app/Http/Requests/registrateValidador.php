<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrateValidador extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'matricula' => ['required', 'numeric', 'unique:users,matricula'],
            'email' => ['required', 'email', 'unique:users,email'],
            'nombre' => ['required', 'string'],
            'apellido_p' => ['required', 'string'],
            'apellido_m' => ['required', 'string'],
            'telefono' => ['required', 'numeric', 'digits_between:10,10'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required']

        ];
    }
}
