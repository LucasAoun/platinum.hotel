<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome'          => 'required|min:3',
            'sobrenome'     => 'required|min:3',
            'email'         => 'required|email',
            'cidade'        => 'required',
            'endereco'      => 'required',
            'cep'           => 'required|digits:8',
            'estado'        => 'required',
            'password'      => 'required|confirmed|min:6'
        ];
    }
}
