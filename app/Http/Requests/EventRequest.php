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
            'details' => 'required|string|max:16777215',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'price_member' => 'nullable|numeric',
            'price_non_member' => 'nullable|numeric',
            'is_active' => 'required|boolean',
            'members_only' => 'required|boolean',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pincode' => 'required|string|max:10|regex:/^\d{4,10}$/',
        ];
    }
}
