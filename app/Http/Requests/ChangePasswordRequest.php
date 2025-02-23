<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'current_password' => 'required|string|min:8',
            'new_password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/[a-z]/', // At least one lowercase letter
                'regex:/[A-Z]/', // At least one uppercase letter
                'regex:/[0-9]/', // At least one number
                'regex:/[@$!%*#?&]/', // At least one special character
            ],
        ];
    }
    
    public function messages()
    {
        return [
            'current_password.required' => 'Current password is required.',
            'new_password.required' => 'New password is required.',
            'new_password.min' => 'New password must be at least 8 characters long.',
            'new_password.confirmed' => 'Password confirmation does not match.',
            'new_password.regex' => 'New password must contain at least one lowercase letter, one uppercase letter, one number, and one special character.',
        ];
    }
    
    protected function prepareForValidation()
    {
        // Sanitize inputs to prevent XSS
        $this->merge([
            'current_password' => strip_tags($this->input('current_password')),
            'new_password' => strip_tags($this->input('new_password')),
        ]);
    }
    
}
