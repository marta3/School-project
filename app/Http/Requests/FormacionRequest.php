<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormacionRequest extends FormRequest
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
                'titulo' => 'required|string|max:50',
                'grado' => 'required|max:30|string',
                'centro'=> 'required|string|max:50',
                
                'anyo_finalizacion'=>'nullable|numeric|min:1900|max:2050',
        ];
    }
}
