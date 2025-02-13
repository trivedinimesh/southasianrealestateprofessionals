<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'first_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/u',
                'last_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/u',
                'designation' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/u',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:8192',
                'fb_id' => 'nullable|url',
                'twitter_id' => 'nullable|url',
                'linkedin_id' => 'nullable|url',
            ];
        }

        public function messages()
        {
            return [
                'first_name.required' => 'First name is required.',
                'first_name.regex' => 'First name can only contain letters and spaces.',
                'last_name.required' => 'Last name is required.',
                'last_name.regex' => 'Last name can only contain letters and spaces.',
                'designation.required' => 'Designation is required.',
                'designation.regex' => 'Designation can only contain letters and spaces.',
                'image.required' => 'image is required.',
                'image.image' => 'The image must be a valid image format (jpeg, png, jpg).',
                'image.mimes' => 'The image must be a file of type: jpeg, png, jpg.',
                'image.max' => 'The image must not exceed 8 MB.',
                'fb_id.url' => 'Facebook ID must be a valid URL.',
                'twitter_id.url' => 'Twitter ID must be a valid URL.',
                'linkedin_id.url' => 'LinkedIn ID must be a valid URL.',
            ];
        }

        protected function prepareForValidation()
        {
            // Sanitize inputs to prevent XSS
            $this->merge([
                'first_name' => strip_tags($this->input('first_name')),
                'last_name' => strip_tags($this->input('last_name')),
                'designation' => strip_tags($this->input('designation')),
                'fb_id' => $this->input('fb_id') ? strip_tags($this->input('fb_id')) : null,
                'twitter_id' => $this->input('twitter_id') ? strip_tags($this->input('twitter_id')) : null,
                'linkedin_id' => $this->input('linkedin_id') ? strip_tags($this->input('linkedin_id')) : null,
            ]);
        }

    
}
