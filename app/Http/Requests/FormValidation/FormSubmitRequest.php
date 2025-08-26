<?php

namespace App\Http\Requests\FormValidation;

use Illuminate\Foundation\Http\FormRequest;

class FormSubmitRequest extends FormRequest
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
            //
            'name' => 'required|string|max:20',
            'email' => 'required|email|max:30',
            'subject' => 'required|string|max:20',
            'message' => 'required|string|max:30',
        ];
    }
    //
    public function messages(): array{
        return [
            //
            'name.required' => 'Name field is missing.',
            'name.max' => 'Maximum characters for Name field is 20.'
        ];
    }
}
