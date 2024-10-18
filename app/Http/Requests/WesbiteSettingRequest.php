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
            'header_image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg',
                'max:8192', // Max 8MB
            ],
            'header_title' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9\s\-\,\.\'\"\(\)\&]+$/u', // Restrict special characters
            ],
            'contact_form_email' => [
                'required',
                'email',
                'max:255', // Ensure valid email format
            ],
            'feedback_form_email' => [
                'required',
                'email',
                'max:255', // Ensure valid email format
            ],
        ];
    }
    
    public function messages()
    {
        return [
            'header_image.required' => 'Header Image is required.',
            'header_image.image' => 'The file must be an image.',
            'header_image.mimes' => 'The image must be of type: jpeg, png, jpg.',
            'header_image.max' => 'The image should not exceed 8MB.',
            'header_title.required' => 'Header title is required.',
            'header_title.regex' => 'Header title can only contain letters, numbers, and certain special characters.',
            'contact_form_email.required' => 'Contact form email is required.',
            'contact_form_email.email' => 'Please provide a valid email address for contact form.',
            'feedback_form_email.required' => 'Feedback form email is required.',
            'feedback_form_email.email' => 'Please provide a valid email address for feedback form.',
        ];
    }
    
    protected function prepareForValidation()
    {
        // Sanitize inputs to prevent XSS
        $this->merge([
            'header_title' => strip_tags($this->input('header_title')),
            'contact_form_email' => strip_tags($this->input('contact_form_email')),
            'feedback_form_email' => strip_tags($this->input('feedback_form_email')),
        ]);
    }
    
}
