<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
          // Ativação da validação
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
            'name' => 'required',                   // Campo obrigatório    
            'email' => 'required | email',          // Campo obrigatório e formato de email
            'password' => 'required | min:6',       // Campo obrigatório e tamanho mínimo de 6 caracteres
        ];
    }

      // Personalizar as mensagens de erro para ser apresentado em português - Os erros são aqueles definidos na função rules
    public function messages(): array {
        return [ 
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve conter um endereço de e-mail válido.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'O campo senha deve conter no mínimo 6 caracteres.',
        ];
    }
}
