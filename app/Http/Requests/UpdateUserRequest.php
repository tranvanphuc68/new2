<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'hometown' => 'required',
            'id_card' => 'required|numeric',
            'academic_level' => 'required',
            'accomplishment' => 'required',
            'account' => 'required|numeric',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:users,email,'.$this->id.',id'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Không để trống',
            'last_name.required' => 'Không để trống',
            'gender.required' => 'Không để trống',
            'dob.required' => 'Không để trống',
            'hometown.required' => 'Không để trống',
            'id_card.required' => 'Không để trống',
            'id_card.numeric' => 'Không có kí tự',
            'academic_level.required' => 'Không để trống',
            'accomplishment.required' => 'Không để trống',
            'account.required' => 'Không để trống',
            'account.numeric' => 'Không có kí tự',
            'phone.required' => 'Không để trống',
            'phone.numeric' => 'Không có kí tự',
            'email.required' => 'Không được bỏ trống email',
            'email.email' => 'Bắt buộc phải là email',
            'email.unique' => 'Đã trùng'
        ];
    }
}
