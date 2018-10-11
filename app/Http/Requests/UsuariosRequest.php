<?php

namespace cerebro\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'nome' => 'required|max:250',
            'email' => 'required|max:250|unique:usuarios',
            'senha' => 'required|max:250'
        ];
    }

    public function messages()
    {
    return [
        'required' => 'O campo :attribute não pode ser vazio.',
        'email.unique' => 'Email já cadastrado'
    ];
    }
}
