<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSellerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'seller_name' => ['required'],
            'seller_email' => ['required', 'unique:sellers,email'],
        ];
    }

    public function messages(): array
    {
        return [
            "seller_name.required" => "O campo nome é obrigatório.",
            "seller_email.required" => "O campo e-mail é obrigatório.",
            "seller_email.unique" => "E-mail indisponível, por favor informe outro.",
        ];

    }
}
