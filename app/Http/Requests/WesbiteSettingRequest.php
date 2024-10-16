<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WesbiteSettingRequest extends FormRequest
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
            'header_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'header_title' => 'required|string|max:255',
            'contact_form_email' => 'required|email',
            'feedback_form_email' => 'required|email',
        ];
    }
}
