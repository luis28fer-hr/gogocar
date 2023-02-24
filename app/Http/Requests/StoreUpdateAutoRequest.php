<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAutoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'usuario_id' => 'required | numeric',
            'placa' => 'required | max:10',
            'marca' => 'required | max:50',
            'modelo' => 'required | max:10',
            'capacidad' => 'required | numeric | min:0',
            'no_seguro' => 'required',
            'activo' => 'required',
            'verificado'
        ];
    }
}