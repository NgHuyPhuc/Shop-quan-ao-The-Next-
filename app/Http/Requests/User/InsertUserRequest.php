<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class InsertUserRequest extends FormRequest
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
            "Username"=>"required|unique:user_admins",
            'Password' =>'required',
        ];
    }
    public function messages()
    {
        return [
            //
            'Username.required' => 'email is required',
            'Password.required' => 'Password is required',
        ];
    }
}
