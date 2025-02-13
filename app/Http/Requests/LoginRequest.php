<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'max:255'],
            'password' => [
                'required',
                'string',
                'min:6',
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
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters long.',
            'password.regex' => 'Password must include at least one lowercase letter, one uppercase letter, one number, and one special character.',
        ];
    }
    
    protected function prepareForValidation()
    {
        // Sanitize inputs to prevent XSS
        $this->merge([
            'email' => strip_tags($this->input('email')),
        ]);
    }
    
}