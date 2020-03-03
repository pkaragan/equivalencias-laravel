<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarCampus extends FormRequest
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
            'nombre' => 'required|string|max:100',
            'iniciales' => 'required|string|max:10',
            'estado' => 'required|string|max:100',
            'ciudad' => 'required|string|max:100',
            'calle' => 'nullable|string|max:100',
            'numero' => 'nullable|numeric|digits:6',
            'numero-int' => 'nullable|string|max:10',
            'colonia' => 'nullable|string|max:100',
            'cp' => 'nullable|numeric|digits:5',
            'telefono' => 'nullable|tel|max:15',
            'ext' => 'nullable|string|max:10',
        ];
    }
}
