<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'email' => 'required|email|unique:usuarios',
            'celular' => 'required|regex:/^\d{9}$/',
            'senha' => 'required|min:6|confirmed',
        ];
    }
}

