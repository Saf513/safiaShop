<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name'=>'required|min:5',
            'description'=>'required|min:20',
            'quantity'=>'required|numeric',
            'image'=>'required|image',
            'price'=>'required|numeric',

        ];
    }
}
