<?php

namespace App\Http\Requests\Grade;

use App\Rules\IsTeacher;
use Illuminate\Foundation\Http\FormRequest;

class StoreGradeRequest extends FormRequest
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
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => ['required', new IsTeacher],
            'name' => 'required',
            'resources' => 'required',
            'shift' => 'required',
            'initial_date' => 'required',
            'final_date' => 'required',
            'registration_date_limit' => 'required',
        ];
    }
}
