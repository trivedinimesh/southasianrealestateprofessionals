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
}
