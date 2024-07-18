<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestPatient extends FormRequest
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
            'last_name' => 'required',
            'gender' => 'required',
            //'date_of_birth' => 'required',
            'marital_status' => 'required',
            'next_of_kin' => 'required',
            'kin_phone_number' => 'required | max:10',
            'relationship' => 'required',
        ];
    }
    public function message(): array{
        return [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'gender.required' => 'Gender is required',
            'date_of_birth.required' => 'Date of birth is required',
            'nin' => 'NIN number is required',
           'marital_status.required' => 'Marital status is required',
           'next_of_kin.required' => 'Next of kin is required',
           'kin_phone_number.required' => 'Kin phone number is required',
           'relationship.required' => 'Relationship is required'
        ];
    }
}
