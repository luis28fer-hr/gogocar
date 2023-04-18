<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class autoEditValidar extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'placa' => ['required', 'numeric'],
            'version' => ['required', 'string'],
            'marca' => ['required', 'string'],
            'capacidad' => ['required', 'integer'],
            'modelo' => ['required'],
            'foto' => ['required', 'image']

        ];
    }
}
