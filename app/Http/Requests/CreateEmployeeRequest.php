<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required','string','max:50',new \App\Rules\NoSpacesRule()],
            'last_name' => 'required|string|max:50',
            'username' => 'required|min:8|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|max:50',
            'employee_id'=>'required|string|max:50',
            'joining_date' => 'required|date|before_or_equal:today',
            'contact_number' => 'required|regex:/^[0-9]{11}$/',
            'company_id' => 'required|exists:companies,id',
            'department_id' => 'required|exists:departments,id',
            'designation_id' => 'required|exists:designations,id',
            'address' => 'nullable|string|max:500'
        ];
    }
}
