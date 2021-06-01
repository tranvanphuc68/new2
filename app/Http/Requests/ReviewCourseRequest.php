<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewCourseRequest extends FormRequest
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
            'course_name' => 'required',
            'input' => 'required|numeric',
            'output' => 'required|numeric',
            'time' => 'required|numeric',
            'duration' => 'required|numeric',
            'tuition' => 'required|numeric',
            'target' => 'required',
            'student' => 'required',
            'skill_speaking' => 'required',
            'skill_reading' => 'required',
            'skill_listening' => 'required',
            'skill_writing' => 'required',
            'grammar' => 'required',
            'vocabulary' => 'required',
            'final_test' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'course_name.required' => 'Không được để trống',
            'input.required' => 'Không được để trống',
            'input.numeric' => 'Không chứa ký tự',
            'output.required' => 'Không được để trống',
            'output.numeric' => 'Không chứa ký tự',
            'time.required' => 'Không được để trống',
            'time.numeric' => 'Không chứa ký tự',
            'duration.required' => 'Không được để trống',
            'duration.numeric' => 'Không chứa ký tự',
            'tuition.required' => 'Không được để trống',
            'tuition.numeric' => 'Không chứa ký tự',
            'target.required' => 'Không được để trống',
            'student.required' => 'Không được để trống',
            'skill_speaking.required' => 'Không được để trống',
            'skill_reading.required' => 'Không được để trống',
            'skill_listening.required' => 'Không được để trống',
            'skill_writing.required' => 'Không được để trống',
            'grammar.required' => 'Không được để trống',
            'vocabulary.required' => 'Không được để trống',
            'final_test.required' => 'Không được để trống'
        ];
    }
}
