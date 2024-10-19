<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class BlogRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:16777215', // Allow long HTML body
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:8192', // Max size 8MB
            'keywords' => 'sometimes|array', // Array of keywords
            'tags' => 'sometimes|array', // Array of tags
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title cannot be longer than 255 characters.',
            'body.required' => 'The body field is required.',
            'body.max' => 'The body content exceeds the maximum allowed length.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max' => 'The image size must not exceed 8MB.',
            'keywords.array' => 'Keywords should be provided as an array.',
            'tags.array' => 'Tags should be provided as an array.',
        ];
    }

    /**
     * Prepare the data for validation by sanitizing inputs.
     */
    protected function prepareForValidation()
    {
        // Sanitize fields to prevent XSS
        $this->merge([
            'title' => strip_tags($this->input('title')), // Strip all tags from title
            'keywords' => $this->sanitizeArray($this->input('keywords')), // Sanitize each keyword
            'tags' => $this->sanitizeArray($this->input('tags')), // Sanitize each tag
        ]);
    }

    /**
     * Sanitize an array by stripping tags from each element.
     */
    private function sanitizeArray($input)
    {
        if (is_array($input)) {
            return array_map('strip_tags', $input); // Apply strip_tags to each array element
        }
        return $input;
    }
}
