<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'fullname' => ['required', 'min:3', 'max:30', Rule::unique('students')->ignore($this->student)], 
            'marca' => ['required', 'min:3', 'max:30'],
            'modelo' => ['required', 'min:3', 'max:30'],
            'descricao' => ['required'],
            'unidade' => ['required'],
            'fornecedor' => ['required'],
            'codigo_secundario' => ['required'],
        ];
    }
}
