<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarUniversidad extends FormRequest
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
            'nombre' => 'required|string|max:100|unique:universidad,nombre,' . $this->universidad,
            'iniciales' => 'required|string|max:15,',
            'tipo' => 'required|string|in:privada,publica',
            'pais' => 'required|string|max:100,'
        ];
    }
}
