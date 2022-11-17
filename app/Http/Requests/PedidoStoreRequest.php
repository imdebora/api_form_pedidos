<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoStoreRequest extends FormRequest
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
            'numero'=>'required|integer',
            'data_pedido'=>'required|numeric',
            'data_previsao_entrega'=>'required|numeric',
            'valor_total'=>'required|numeric'
        ];
    }
}
