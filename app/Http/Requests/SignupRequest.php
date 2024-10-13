<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'isd_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:15|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed', // Password confirmation
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required.',
            'email.unique' => 'This email is already taken.',
            'password.confirmed' => 'Password confirmation does not match.',
        ];
    }
}
