<?php

namespace App\Http\Requests;

use App\Models\Post;
use App\Rules\Post as RulesPost;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => ['required', new RulesPost],
            'content' => ['required', new RulesPost]
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Không được bỏ trống',
            'content.required' => "Không được bỏ trống"
        ];
    }
}

