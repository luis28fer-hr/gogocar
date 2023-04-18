<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class autoValidar extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'placa' => ['required', 'numeric', 'unique:autos,placa'],
            'version' => ['required', 'string'],
            'marca' => ['required', 'string'],
            'capacidad' => ['required', 'integer'],
            'modelo' => ['required'],
            'foto' => ['required', 'image']
        ];
    }
}
