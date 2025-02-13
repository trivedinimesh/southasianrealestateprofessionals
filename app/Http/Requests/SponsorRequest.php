<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponsorRequest extends FormRequest
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
                    'name' => [
                        'required',
                        'string',
                        'max:255',
                        'regex:/^[a-zA-Z0-9\s\-\,\.\'\"\(\)\&]+$/u', // Restricts special characters
                    ],
                    'category' => [
                        'required',
                        'string',
                        'max:255',
                        'regex:/^[a-zA-Z0-9\s\-\,\.\'\"\(\)\&]+$/u', // Restricts special characters
                    ],
                    'image' => [
                        'required',
                        'image',
                        'mimes:jpeg,png,jpg',
                        'max:8192', // Max 8MB
                    ],
                ];
            }

            public function messages()
            {
                return [
                    'name.required' => 'The name field is required.',
                    'name.regex' => 'The name can only contain letters, numbers, and certain special characters.',
                    'category.required' => 'The category field is required.',
                    'category.regex' => 'The category can only contain letters, numbers, and certain special characters.',
                    'image.required' => 'The image field is required.',
                    'image.image' => 'The file must be an image.',
                    'image.mimes' => 'The image must be of type: jpeg, png, jpg.',
                    'image.max' => 'The image should not exceed 8MB.',
                ];
            }

            protected function prepareForValidation()
            {
                // Sanitize inputs to prevent XSS
                $this->merge([
                    'name' => strip_tags($this->input('name')),
                    'category' => strip_tags($this->input('category')),
                ]);
            }

}
