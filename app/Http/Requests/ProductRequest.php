<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'ten' => 'required|min:10|max:100',
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => trans('Không được để trống'),
            'ten.min' => trans('Tên phải trên 10 kí tự'),
            'ten.max' => trans( 'Tên không quá 100 kí tự'),
        ];
    }
}
