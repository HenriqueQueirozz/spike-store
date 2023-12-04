<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSellerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'seller_id' => ['required'],
            'seller_name' => ['required'],
            'seller_email' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            "seller_id.required" => "O campo vendedor é obrigatório.",
            "seller_name.required" => "O campo nome é obrigatório.",
            "seller_email.required" => "O campo e-mail é obrigatório."
        ];

    }
}
