<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'gender' => 'required|string|in:F,M',
            'rg' => 'required|string',
            'phone' => 'required|string',
            'hometown' => 'required|string',
            'address' => 'required|string',
            'birth_date' => 'required|date',
        ];
    }
}
