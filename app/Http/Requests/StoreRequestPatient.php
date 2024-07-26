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
            'phone_number' => 'required | max:10',
            'date_of_birth' => 'required',
            'marital_status' => 'nullable',
            'next_of_kin' => 'required',
            'nin' => 'nullable | max:14',
            'kin_phone_number' => 'nullable | max:10',
            'relationship' => 'required',
        ];
    }
    public function message(): array{
        return [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'gender.required' => 'Gender is required',
            'phone_number.required' => 'Phone number must not be beyond 10 characters',
            'date_of_birth.required' => 'Date of birth is required',
           'nin' => 'NIN number must not be beyond 14 characters',
           'marital_status.required' => 'Marital status is required',
           'next_of_kin.required' => 'Next of kin is required',
           'kin_phone_number.required' => 'Phone number must not be beyond 10 characters',
           'relationship.required' => 'Relationship is required'
        ];
    }
}
