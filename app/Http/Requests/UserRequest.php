<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Change to your authorization logic
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'isd_code' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'unique:users,phone_number', 'regex:/^[0-9\-\+\(\)\s]+$/', 'digits:10'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->route('user')], // Unique email check
            'password' => ['nullable', 'string', 'min:8'], // Password is nullable for updates
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required.',
            'first_name.string' => 'First name must be a valid string.',
            'first_name.max' => 'First name cannot exceed 255 characters.',
            'first_name.regex' => 'First name can only contain letters and spaces.',

            'last_name.required' => 'Last name is required.',
            'last_name.string' => 'Last name must be a valid string.',
            'last_name.max' => 'Last name cannot exceed 255 characters.',
            'last_name.regex' => 'Last name can only contain letters and spaces.',

            'isd_code.required' => 'ISD code is required.',
            'isd_code.string' => 'ISD code must be a valid string.',

            'phone_number.required' => 'Phone number is required.',
            'phone_number.string' => 'Phone number must be a valid string.',
            'phone_number.unique' => 'This phone number is already in use.',
            'phone_number.regex' => 'Phone number can only contain numbers, dashes, parentheses, and spaces.',
            'phone_number.digits' => 'Phone number must be exactly 10 digits.',

            'email.required' => 'Email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Email address cannot exceed 255 characters.',
            'email.unique' => 'This email is already registered.',

            'password.min' => 'Password must be at least 8 characters long.',
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
        ]);
    }
}