<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
                
                'address'=>'required',
                'phone_number'=>'required|numeric',
                'name' => 'required',
                
        ];
    }
    public function messages()
    {
        return [
               'address.required'=>'Vui lòng nhập địa chỉ',
                'phone_number.required'=>'Vui lòng nhập số điện thoại',
                'phone_number.numeric'=>'Không phải định dạng số điện thoại',
                'name.required' =>'Vui Lòng Nhập Tên !',



        ];
    }
}
