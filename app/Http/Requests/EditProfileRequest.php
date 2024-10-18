<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    use Illuminate\Validation\Rule;

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/u'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/u'],
            'isd_code' => ['required', 'string', 'regex:/^\+\d+$/'], // ISD codes like +91
            'phone_number' => ['required', 'string', 'regex:/^[0-9\-\+\(\)\s]+$/', 'min:10', 'max:15'], // Allows numbers, dashes, spaces, and parentheses
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->user()->id)], // Unique except for the current user
            'password' => ['nullable', 'string', 'min:8'], // Nullable for unchanged password
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
            'isd_code.regex' => 'ISD code must start with a "+" followed by digits (e.g., +91).',
            'phone_number.required' => 'Phone number is required.',
            'phone_number.regex' => 'Phone number can only contain numbers, dashes, parentheses, and spaces.',
            'phone_number.min' => 'Phone number must be at least 10 characters long.',
            'phone_number.max' => 'Phone number must not exceed 15 characters.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Email address must be a valid email format.',
            'email.max' => 'Email address must not exceed 255 characters.',
            'email.unique' => 'The email address has already been taken.',
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
            'password' => $this->input('password') ? strip_tags($this->input('password')) : null, // Keep password as null if not set
        ]);
    }
    
}
