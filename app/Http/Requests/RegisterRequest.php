<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
                'email'=>'required|unique:users,email|email',
                'address'=>'required',
                'phone_number'=>'required|numeric',
                'password'=>'required',
                're-pasword'=>'same:password'
        ];
    }
         public function messages(){
        return [
                'email.required'=>'Vui lòng nhập email',
                'email.unique'=>'Email đã tồn tại',
                'email.email'=>'Không phải định dạng email',
                'address.required'=>'Vui lòng nhập địa chỉ',
                'phone_number.required'=>'Vui lòng nhập số điện thoại',
                'phone_number.numeric'=>'Không phải định dạng số điện thoại',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're-password.same'=>'Mật khẩu nhập không khớp'
            ];
    }
    
}