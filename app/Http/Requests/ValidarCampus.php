<?php

namespace App\Http\Requests;

use App\Models\Admin\Universidad;
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
        if($this->get('edit')=='edit')
        {
            return [
                'nombre' => 'required|string|max:100',
                'iniciales' => 'required|string|max:10',
                'estado' => 'required|string|max:100',
                'ciudad' => 'required|string|max:100',
                'calle' => 'nullable|string|max:100',
                'numero' => 'nullable|numeric|digits_between:1,6',
                'numero_int' => 'nullable|string|max:10',
                'colonia' => 'nullable|string|max:100',
                'cp' => 'nullable|numeric|digits:5',
                'telefono' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'ext' => 'nullable|string|max:10',
            ];
        }else{
            if($this->get('radio-universidad')=='existente')
            {
                return [
                    'nombre' => 'required|string|max:100',
                    'iniciales' => 'required|string|max:10',
                    'estado' => 'required|string|max:100',
                    'ciudad' => 'required|string|max:100',
                    'calle' => 'nullable|string|max:100',
                    'numero' => 'nullable|numeric|digits_between:1,6',
                    'numero_int' => 'nullable|string|max:10',
                    'colonia' => 'nullable|string|max:100',
                    'cp' => 'nullable|numeric|digits:5',
                    'telefono' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                    'ext' => 'nullable|string|max:10',
                    'select-uni' => 'required|numeric|min:1'
                ];
            }else{
                return [
                    'uni-nombre' => 'required|string|max:100|unique:universidad,nombre,'.$this->route('uni-id'),
                    'uni-iniciales' => 'required|string|max:10,',
                    'uni-tipo' => 'required|string|in:privada,publica',
                    'uni-pais' => 'required|string|max:100,',
                    'nombre' => 'required|string|max:100',
                    'iniciales' => 'required|string|max:10',
                    'estado' => 'required|string|max:100',
                    'ciudad' => 'required|string|max:100',
                    'calle' => 'nullable|string|max:100',
                    'numero' => 'nullable|numeric|digits_between:1,6',
                    'numero_int' => 'nullable|string|max:10',
                    'colonia' => 'nullable|string|max:100',
                    'cp' => 'nullable|numeric|digits:5',
                    'telefono' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                    'ext' => 'nullable|string|max:10',
                ];
            }             
        }                
    }

    public function attributes()
    {
        return [
            'uni-nombre' => 'nombre de universidad',
            'uni-iniciales' => 'iniciales de universidad',
            'uni-tipo' => 'tipo',
            'uni-pais' => 'pais',
            'select-uni' => 'lista universidad'
        ];
    }

    public function messages()
    {
        return [
            'select-uni.min' => 'Es necesario seleccionar un instituto para registrar el nuevo campus',            
        ];
    }
}
