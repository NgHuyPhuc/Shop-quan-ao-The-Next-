<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditUserRequest extends FormRequest
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
            "Username"=>[
                "required",
                Rule::unique("user_admins")->ignore($this->id),
            ],
            'Password' =>'required',
        ];
    }
    public function messages()
    {
        return [
            //
            'Username.required' => 'Username is required',
            'Password.required' => 'Password is required',
        ];
    }
}
