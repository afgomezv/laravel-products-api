<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // change to true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3', // ['required', 'min:3']
            'description' => 'required',
            'category' => 'required',
        ];
    }

    public function messages(): array // Personalizar los mensajes de error
    {
        return [
            'name.required' => 'El nombre curso de es obligatorio',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'description.required' => 'La descripción es obligatoria',
            'category.required' => 'La categoría es obligatoria',
        ];
    }

    public function attributes(): array // Personalizar los nombres de los campos
    {
        return [
            'name' => 'nombre del curso',
        ];
    }
}
