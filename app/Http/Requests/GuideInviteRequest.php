<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class GuideInviteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2|max:175',
            'email' => 'required|email|unique:guides_invites,email',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'กรุณากรอกชื่อ',
            'name.min' => 'ชื่อต้องยาว 2 ตัวอักษรขึ้นไป',
            'name.max' => 'ชื่อต้องไม่เกิน 175 ตัวอักษร',

            'email.required' => 'กรุณากรอกอีเมลล์',
            'email.email' => 'รูปแบบอีเมลล์ไม่ถูกต้อง',
            'email.unique' => 'อีเมลล์ถูกใช้ไปแล้ว, กรุณาป้อนอีเมลล์อื่น'
        ];
    }

    public function validator()
    {
        return Validator::make($this->input(), $this->rules(), $this->messages(), $this->attributes());
    }

    public function attributes()
    {
        return [];

    }
}
