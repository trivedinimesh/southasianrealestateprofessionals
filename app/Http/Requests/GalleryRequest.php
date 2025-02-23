<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9\s\-\,\.\'\"\(\)\&]+$/'],
            'images.*' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:8192'], // Allows multiple images
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.regex' => 'The title may only contain letters, numbers, spaces, dashes, commas, periods, quotes, parentheses, and ampersands.',
            'images.*.image' => 'Each file must be an image.',
            'image.required' => 'The image field is required.',
            'images.*.mimes' => 'Each image must be of type: jpeg, png, jpg.',
            'images.*.max' => 'Each image should not exceed 8MB.',
        ];
    }
    
    protected function prepareForValidation()
    {
        // Sanitize inputs to prevent XSS
        $this->merge([
            'title' => strip_tags($this->input('title')),
        ]);
    }
    
}
