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
            'isd_code' => ['required', 'string','isd_code'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number', 'regex:/^[0-9\-\+\(\)\s]+$/', 'digits:10'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->route('user')], // Unique check except for current user
            'password' => ['nullable', 'string', 'min:8'], // Nullable allows leaving password unchanged
        ];
    }
}