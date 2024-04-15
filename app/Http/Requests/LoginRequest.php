<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name'=>['required','exists:users,name'],
            'password'=>['required']
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>"el usuario es obligatorio",
            'name.exists'=>"El usuario no existe",
            'password.required'=>"La contraseña es obligatoria"
        ];
    }
}
