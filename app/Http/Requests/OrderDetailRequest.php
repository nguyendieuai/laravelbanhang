<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'soluong' => 'required|min:1000',
            'dongia' => 'required',
            'order_id' => 'required',
            'product_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'dongia.required' => trans('Không được để trống'),
            'soluong.required' => trans('Không được để trống'),
            'soluong.min' => trans('Không được dưới 1000 kí tự'),
            'product_id.required' => trans('Không được để trống'),
            'order_id.required' => trans('Không được để trống'),
        ];
    }
}
