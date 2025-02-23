<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
{
    return [
        'first_name' => [
            'required',
            'string',
            'max:255',
            'regex:/^[a-zA-Z\s]+$/u', // Ensures only letters and spaces
        ],
        'last_name' => [
            'required',
            'string',
            'max:255',
            'regex:/^[a-zA-Z\s]+$/u', // Ensures only letters and spaces
        ],
        'isd_code' => [
            'required',
            'string',
            'max:10',
            'regex:/^\+\d+$/u', // Must start with a + and contain digits
        ],
        'phone_number' => [
            'required',
            'string',
            'max:15',
            'regex:/^[0-9\-\+\(\)\s]+$/u', // Allows numbers, dashes, spaces, and parentheses
            'unique:users', // Ensure unique phone number
        ],
        'email' => [
            'required',
            'email',
            'max:255',
            'unique:users', // Ensure unique email
        ],
        'password' => [
            'required',
            'string',
            'min:6',
            'confirmed', // Requires password confirmation
            'regex:/[a-z]/', // At least one lowercase letter
            'regex:/[A-Z]/', // At least one uppercase letter
            'regex:/[0-9]/', // At least one digit
            'regex:/[@$!%*#?&]/', // At least one special character
        ],
    ];
}

public function messages()
{
    return [
        'first_name.required' => 'First name is required.',
        'first_name.regex' => 'First name can only contain letters and spaces.',
        'last_name.required' => 'Last name is required.',
        'last_name.regex' => 'Last name can only contain letters and spaces.',
        'isd_code.required' => 'ISD code is required.',
        'isd_code.regex' => 'ISD code must start with a + followed by digits.',
        'phone_number.required' => 'Phone number is required.',
        'phone_number.regex' => 'Phone number can only contain numbers, dashes, parentheses, and spaces.',
        'phone_number.unique' => 'This phone number is already taken.',
        'email.required' => 'Email is required.',
        'email.email' => 'Please provide a valid email address.',
        'email.unique' => 'This email is already taken.',
        'password.required' => 'Password is required.',
        'password.min' => 'Password must be at least 6 characters long.',
        'password.confirmed' => 'Password confirmation does not match.',
        'password.regex' => 'Password must include at least one lowercase letter, one uppercase letter, one number, and one special character.',
    ];
}

protected function prepareForValidation()
{
    // Sanitize inputs to prevent XSS
    $this->merge([
        'first_name' => strip_tags($this->input('first_name')),
        'last_name' => strip_tags($this->input('last_name')),
        'isd_code' => strip_tags($this->input('isd_code')),
        'phone_number' => strip_tags($this->input('phone_number')),
        'email' => strip_tags($this->input('email')),
        'password' => strip_tags($this->input('password')),
    ]);
}

}
