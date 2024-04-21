<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccineRequest extends FormRequest
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
            'vaccine' => 'required|string|max:255',
            'abbreviation' => 'required|string|max:50',
            'manufacturer' => 'required|string|max:255',
            'doses' => 'required|integer|min:1',
            'approved_ages' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }
}
