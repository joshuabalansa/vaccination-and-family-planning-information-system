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
            'firstname' => '',
            'middlename' => '',
            'lastname'  => '',
            'birthdate' => '',
            'time' => '',
            'bw' => '',
            'bl' => '',
            'city' => '',
            'brgy' => '',
            'phone' => '',
            'g' => '',
            'p' => '',
            'a' => '',
            'lb' => '',
            'd' => '',
            'philhealth' => '',
            '4ps_number' => '',
            'm_name' => '',
            'm_birthdate' => '',
            'm_age'  => '',
            'm_occupation' => '',
            'f_name'      => '',
            'f_birthdate'  => '',
            'f_age'  => '',
            'f_occupation'  => '',
        ];
    }
}
