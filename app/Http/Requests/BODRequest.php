<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BODRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'fb_id' => 'nullable|url',
            'twitter_id' => 'nullable|url',
            'linkedin_id' => 'nullable|url',
        ];
    }
}
