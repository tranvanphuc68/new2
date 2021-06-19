<?php

namespace App\Http\Requests;

use App\Rules\Comment;
use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            //
            'content' => ['required', new Comment]
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'Không được bỏ trống'
            
        ];
    }
}
