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
            'username' => 'string|min:6|max:255|unique:accounts',
            'email' => 'string|email|min:6|max:255|unique:accounts',
            'password' => 'string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'unique' => ':attribute already exist',
            'max' => ':attribute can not be too long',
            'min' => ':attribute too short',
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
}
