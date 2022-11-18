<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoStoreRequest extends FormRequest
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
            'id'=>'integer',
            'nome'=>'required|string',
            'codigo'=>'required|string',
            'preco'=>'required|numeric',
            'preco_promocional'=>'required|numeric',
            'unidade'=>'required|string',
            'gtin'=>'required|string',
            'tipoVariacao'=>'required|string',
            'localizacao'=>'required|string',
            'preco_custo'=>'required|numeric',
            'preco_custo_medio'=>'required|numeric',
            'situacao'=>'required|string'

        ];
    }
}
