<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'body_weight' => 'required',
            'body_length' => 'required',
            'address' => 'required',
            'gravida' => 'nullable',
            'para' => 'nullable',
            'abortion' => 'nullable',
            'live_birth' => 'nullable',
            'death' => 'nullable',
            'philhealth' => 'nullable',
            '4ps_number' => 'nullable',
            'mother_maiden_name' => 'nullable',
            'mother_birth_date' => 'nullable',
            'mother_age' => 'nullable',
            'mother_occupation' => 'nullable',
            'father_name' => 'nullable',
            'father_birth_date' => 'nullable',
            'father_age' => 'nullable',
            'father_occupation' => 'nullable',
            'phone_number' => 'required',
            'appointment_time' => 'required',
            'appointment_date' => 'required',
        ];
    }
}
