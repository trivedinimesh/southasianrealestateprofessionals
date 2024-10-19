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
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'isd_code' => ['required', 'string'],
            'phone_number' => ['required', 'integer', 'regex:/^[0-9\-\+\(\)\s]+$/', 'digits:10'],
            'email' => ['required', 'email', 'max:255'], // Unique check except for current user
            'password' => ['nullable', 'string', 'min:8'], // Nullable allows leaving password unchanged
        ];
    }

    public function messages(): array
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
        'phone_number.integer' => 'Phone number must be a valid integer.',
        'phone_number.regex' => 'Phone number must contain only numbers, dashes, or spaces.',
        'phone_number.digits' => 'Phone number must be exactly 10 digits.',

        'email.required' => 'Email address is required.',
        'email.email' => 'Please enter a valid email address.',
        'email.max' => 'Email address cannot exceed 255 characters.',

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
