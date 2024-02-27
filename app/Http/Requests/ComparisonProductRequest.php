<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComparisonProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd('JERRY',request()->product_a,request()->product_b,request()->product_c,request()->product_d);
        return  [
            'product_1' => ['required','exists:App\Models\Product,id','numeric'],
            'product_2' => ['required','exists:App\Models\Product,id','numeric'],
            'product_3' => ['nullable','exists:App\Models\Product,id','numeric'], 
            'product_4' => ['nullable','exists:App\Models\Product,id','numeric']
        ];

        // dd($temp);
    }

    public function messages()
    {
        return [
            'product_1.required' => 'RP1',
            'product_2.required' => 'RP2',
            'product_1.exists'   => 'EIND1',
            'product_2.exists'   => 'EIND2',
            'product_3.exists'   => 'EIND3',
            'product_4.exists'   => 'EIND4',
        ];
    }
}
