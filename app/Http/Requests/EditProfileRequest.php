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
            'password' => $this->input('password') ? strip_tags($this->input('password')) : null, // Keep password as null if not set
        ]);
    }
    

}
