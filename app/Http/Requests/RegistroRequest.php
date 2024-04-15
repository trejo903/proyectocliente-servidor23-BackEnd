<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user'=>['required'],
            'apellido'=>['required'],
            'name'=>['required','string','unique:users,name'],
            'password'=>[
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->numbers()
            ],
        ];
    }
    public function messages(){
        return[
            'user'=>"El nombre es obligatorio",
            'apellido'=>"El apellido es obligatorio",
            'name.required'=>"El usuario es obligatorio",
            'name.unique'=>"El usuario ya esta registrado",
            'password'=>"La contraseña debe tener minimo 8 caracteres, letras y numeros"
        ];
    }
}

