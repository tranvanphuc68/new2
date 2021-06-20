<?php

namespace App\Http\Requests;

use App\Rules\Teacher;
use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required',
            'id_teacher' => ['required','exists:users,id', new Teacher],
            'description' => 'required',
            'timetable' => 'required',
            'max_students' => 'required|numeric|between:1,50',
            'sum_time' => 'required|numeric',
            'lessons' => 'required|numeric',
            'fee' => 'required|numeric',
            'salary' => 'required|numeric',
            'link' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'id_teacher.required' => 'Không được để trống',
            'description.required' => 'Không được để trống',
            'timetable.required' => 'Không được để trống',
            'max_students.required' => 'Không được để trống',
            'max_students.numeric' => 'Không chứa kí tự',
            'max_students.between' => 'Không thể vượt quá 50 ',
            'sum_time.required' => 'Không được để trống',
            'sum_time.numeric' => 'Không chứa kí tự',
            'lessons.required' => 'Không được để trống',
            'lessons.numeric' => 'Không chứa kí tự',
            'fee.required' => 'Không được để trống',
            'fee.numeric' => 'Không chứa kí tự',
            'salary.required' => 'Không được để trống',
            'salary.numeric' => 'Không chứa kí tự',
            'link.required' => 'Không được để trống',
            'status.required' => 'Không được để trống'
        ];
    }
}
