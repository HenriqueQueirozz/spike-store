<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'seller_id' => ['required', 'numeric'],
            'sale_value' => ['required', 'numeric'],
            'sale_date' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            "seller_id.required" => "É necessário informar o vendedor responsável pela venda.",
            "sale_value.required" => "O campo valor da venda é obrigatório.",
            "sale_value.numeric" => "Valor da venda inválido.",
            "sale_date.required" => "O campo data de venda é obrigatório.",
            "sale_value.required" => "Data de venda inválido.",
        ];

    }
}
