<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFooRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'grade' => ['required', 'numeric', 'between:1,10'],
            'passed' => ['required', 'in:0,1'],
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'The name field can only contain letters.',
            'grade.between' => 'The grade field must be between 1 and 10.',
            'passed.in' => 'The passed field must be either 0 or 1.',
        ];
    }
}
