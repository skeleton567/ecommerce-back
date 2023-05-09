<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => 'string|required',
            'description' => 'string|required',
           'image '=> 'image|required',
            'price' =>'numeric|required',
        ];
    }

    public  function prepareForValidation() 
    {
        $this->request->offsetUnset('image');
        $this->merge([
            'image' => request()->file('image')->store('images'),
        ]);
    }
}
