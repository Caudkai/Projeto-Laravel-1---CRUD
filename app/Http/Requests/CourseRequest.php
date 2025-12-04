<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest; 
 
class CourseRequest extends FormRequest 
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
     * @return array<string,\Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> 
     */ 
    public function rules(): array 
    { 
        return [ 
            'name' => 'required|string|min:3|max:150', // obrigatório, string 3-150 caracteres 
            'description' => 'nullable|string|min:10' // pode ser nulo, texto mínimo 10 caracteres 
        ]; 
    } 
} 