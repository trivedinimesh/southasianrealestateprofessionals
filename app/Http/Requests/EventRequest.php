<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'details' => 'required|string|max:16777215', // Allow long HTML details
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:8192',
            'price_member' => 'nullable|numeric',
            'price_non_member' => 'nullable|numeric',
            'is_active' => 'sometimes|boolean',
            'members_only' => 'sometimes|boolean',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pincode' => 'required|string|max:10|regex:/^\d{4,10}$/',
            'features' => 'sometimes|array',
        ];
    }

    /**
     * Custom error messages for validation.
     */
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title cannot exceed 255 characters.',
            'details.required' => 'The details field is required.',
            'details.max' => 'The details content exceeds the maximum allowed length.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be of type: jpeg, png, jpg.',
            'image.max' => 'The image size must not exceed 8MB.',
            'price_member.numeric' => 'The member price must be a valid number.',
            'price_non_member.numeric' => 'The non-member price must be a valid number.',
            'date.required' => 'The date field is required.',
            'start_time.required' => 'The start time field is required.',
            'end_time.required' => 'The end time field is required.',
            'end_time.after' => 'The end time must be after the start time.',
            'address.required' => 'The address field is required.',
            'country.required' => 'The country field is required.',
            'state.required' => 'The state field is required.',
            'city.required' => 'The city field is required.',
            'pincode.required' => 'The pincode field is required.',
            'pincode.regex' => 'The pincode must be between 4 to 10 digits.',
            'features.array' => 'Features should be provided as an array.',
        ];
    }

    /**
     * Prepare the data for validation by sanitizing inputs.
     */
    protected function prepareForValidation()
    {
        // Sanitize fields to prevent XSS
        $this->merge([
            'title' => strip_tags($this->input('title')), // Strip tags from title
            'details' => $this->input('details'), // Keep HTML in details as CKEditor will handle it
            'address' => strip_tags($this->input('address')),
            'country' => strip_tags($this->input('country')),
            'state' => strip_tags($this->input('state')),
            'city' => strip_tags($this->input('city')),
            'pincode' => strip_tags($this->input('pincode')),
            'features' => $this->sanitizeArray($this->input('features')), // Sanitize each feature
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
