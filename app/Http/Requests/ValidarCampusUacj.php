<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidarCampusUacj extends FormRequest
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
            'nombre' => 'required|max:100|unique:campus_uacj,nombre,'.$this->route('id'),
            'iniciales' => 'required|max:10,',
            'estado' => 'required|max:80,',
            'ciudad' => 'required|max:80,',
            'calle' => 'nullable|max:80',
            'numero' => 'nullable|max:10',
            'cp' => 'nullable|numeric|digits:5',
        ];
    }
}
