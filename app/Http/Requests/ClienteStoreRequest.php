<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'codigo'=>'required|integer',
            'nome'=>'required|string',
            'fantasia'=>'required|string',
            'tipo_pessoa'=>'required|string',
            'cpf_cnpj'=>'required|string',
            'endereco'=>'required|string',
            'numero'=>'required|integer',
            'complemento'=>'required|string',
            'bairro'=>'required|string',
            'cidade'=>'required|string',
            'uf'=>'required|string',
            'cep'=>'required|string'
        ];
    }
}
