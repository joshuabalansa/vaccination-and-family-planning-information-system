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
            'firstname' => 'required|string',
            'lastname'  => 'required|string',
            'age'       => 'required|string',
            'phone'     => 'required|string',
            'street'    => 'required|string',
            'city'      => 'required|string',
            'brgy'      => 'required|string',
            'zipcode'   => 'required|string',
            'date'      => 'required|date',
            'time'      => 'required|date_format:H:i',
            'allergic_reaction' => 'nullable|string',
            'vaccine_type'      => 'required|string',
            'vaccine_center'    => 'required|string',
        ];
    }
}
