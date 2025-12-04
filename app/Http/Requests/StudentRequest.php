<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer essa requisição.
     */
    public function authorize(): bool
    {
        return true; // deixe true por enquanto; depois você pode implementar autorização
    }

    /**
     * Regras de validação.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:150', // obrigatório, string 3-150 caracteres 
            'email' => 'required|email|unique:students,email', // obrigatório, unico por stydant, email
            'classroom_id' => 'required|exists:classrooms,id', 
        ];
    }
}
