<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'Username' => 'required|email',
            'Password' => 'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'Username.required' => 'Email không được bỏ trống',
            'Username.email' => 'Email không hợp lệ',
            'Password.required' => 'Mật khẩu không được bỏ trống',
            'Password.min' => 'Mật khẩu tối thiểu 3 ký tự',
            // 'Password.max' => 'Mật khẩu tối đa 6 ký tự',
        ];
    }
}
