<?php

namespace App\Http\Requests\AuthRequests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'string|required|max:20',
            'last_name' => 'string|required|max:20',
            'gender' => 'string|required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'phone' => 'string|nullable|unique:users,phone|max:20',
            'email' => 'string|email|required|unique:users,email|max:30',
            'password' => 'string|required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/'
        ];
    }
}
