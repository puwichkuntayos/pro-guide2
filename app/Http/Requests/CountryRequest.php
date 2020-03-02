<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'name' => 'required|max:175',
            'image' => 'mimes:jpeg,jpg,png|max:2048', // 10240 10 MB //  (2048 KB)
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'กรุณากรอกชื่อบริษัท',

            'image.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png เท่านั้น',
            'image.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',
        ];
    }
}
