<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienciaRequest extends FormRequest
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
                'puesto' => 'required|string|max:30',
                'funcion_realizada' => 'required|max:30|string',
                'empresa'=> 'required|string|max:50',
                'sector_empresa'=>'required|string|max:50',
                'mes_anyo_inicio'=>'string|max:7|date_format:m/Y',
                'mes_anyo_fin' => 'nullable|string|max:7|date_format:m/Y',
        ];
    }
}
