<?php

namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
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
            'usuario' => 'required|string|max:100',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'telefono' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'estado' => 'required|string|max:100,',
            'ciudad' => 'required|string|max:100,',
            'calle' => 'nullable|string|max:100',
            'numero' => 'nullable|numeric|digits_between:1,6',
            'numero_int' => 'nullable|string|max:10',
            'colonia' => 'nullable|string|max:100',
            'cp' => 'nullable|numeric|digits:5',
            'fecha_nac'=>'required|date_format:Y-m-d',
            'password' => 'nullable|min:5',
            're_password' => 'nullable|required_with:password|min:5|same:password',
            'status' => 'required|boolean',
        ];
    }
}
