<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'code' =>'required',
            'name' =>'required',
            'price' =>'required',
            'info' =>'required',
            'describer' =>'required',
        ];
    }
    public function messages()
    {
        return [
            //
            'code.required' => 'Code is required',
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'info.required' => 'Info is required',
            'describer.required' => 'Describer is required',
        ];
    }
}
