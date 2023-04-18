<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class viajeValidar extends FormRequest
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
            'encuentro' => ['required', 'string'],
            'tipo' => ['required'],
            'ida' => ['nullable'],
            'vuelta' => ['nullable'],
            'dias[]' => ['nullable'],
            'vehiculo' => ['required'],
        ];
    }
}
