<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'ngaylaphoadon' => 'required',
            'diachigiaohang' => 'required',
            'tien' => 'required',
            'diachigiaohang' => 'required',
            'customer_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ngaylaphoadon.required' => trans('Không được để trống'),
            'diachigiaohang.required' => trans('Không được để trống'),
            'tien.required' => trans('Không được để trống'),
            'ghichu.required' => trans('Không được để trống'),
            'customer_id.required' => trans('Không được để trống'),
        ];
    }
}
