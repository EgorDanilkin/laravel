<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminNewsSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|between:10,50',
            'content' => 'required|string|between:20,200',
            'category_id' => 'required|integer|exists:categories,id',
            'source_id' => 'integer|exists:sources,id',
            'image' => 'file|image'
        ];
    }
}
