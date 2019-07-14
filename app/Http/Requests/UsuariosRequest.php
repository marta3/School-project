<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UsuariosRequest extends FormRequest
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
            'name' => 'required|string|max:20',
            'second_name' => 'required|max:50',
            'provincia' => 'required|max:30',
            'localidad' => 'required|max:50',
            'direccion' => 'required|max:100',
            'telefono' => 'required|max:9',
            'fecha_nac' => 'required|date',
            'email' => 'required|string|max:50|email|unique:users,email,'.Auth::user()->id,
            'dni' => 'required|max:9',
            'foto' => 'image',
        ];
    }
}
