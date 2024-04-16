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
            'first_name' => '',
            'middle_name' => '',
            'last_name' => '',
            'birth_date' => '',
            'body_weight' => '',
            'body_length' => '',
            'address' => '',
            'gravida' => '',
            'para' => '',
            'abortion' => '',
            'live_birth' => '',
            'death' => '',
            'philhealth' => '',
            '4ps_number' => '',
            'mother_maiden_name' => '',
            'mother_birth_date' => '',
            'mother_age' => '',
            'mother_occupation' => '',
            'father_name' => '',
            'father_birth_date' => '',
            'father_age' => '',
            'father_occupation' => '',
            'phone_number' => '',
            'appointment_time' => '',
            'appointment_date' => '',
        ];
    }
}
