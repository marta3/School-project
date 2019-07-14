<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdiomaRequest extends FormRequest
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
            'idioma' => 'required|string|max:50',
            'nivel_hablado' => 'required|max:30|string',
            'nivel_escrito'=> 'required|string|max:50',
            'titulo_oficial'=>'nullable|string|max:2',        
        ];
    }
}
