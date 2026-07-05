<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'school_id' => ['required', 'exists:schools,id'],
            'class_id' => ['required', 'exists:classes,id'],
            'admission_number' => ['required', 'unique:students,admission_number'],
            'roll_number' => ['nullable', 'integer'],
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'gender' => ['required'],
            'date_of_birth' => ['required', 'date'],
            'father_name' => ['required'],
            'mother_name' => ['required'],
            'email' => ['nullable', 'email', 'unique:students,email'],
            'phone' => ['nullable'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'postal_code' => ['required'],
            'admission_date' => ['required', 'date'],
            'profile_picture' => ['nullable', 'image'],
        ];
    }
}
