<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Mark;
class MarkRequest extends FormRequest
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
               "$student->id_student" => ['required', new Mark()]
            ];
    }

    public function messages()
    {
        foreach ($students as $student) {
            return [
            "$student->id_student.required" => 'Không được bỏ trống'   
            ];
        }
    }
}
