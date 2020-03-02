<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GuideRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [


            'first_name' => 'required|min:2|max:175',
            'last_name'  => 'required|min:2|max:175',
            'phone' => 'required|min:10|max:10',

            'line_id'=> 'required',

            //ที่อยู่ตามทะเบียนบ้าน
            'home' => 'required',
            'home_street' => 'required',
            'home_dtrict' => 'required',
            'home_kat' => 'required',
            'home_country' => 'required',
            'home_zip' => 'required',
            'home_accommodation' => 'required',


//ข้อมูลส่วนตัว

            'birdthday' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'nationality' => 'required',
            'origin' => 'required',
            'religion' => 'required',
            'weight' => 'required',
            'hight' => 'required',
            'id_card' => 'required|min:13|max:13',
            'place' => 'required',
            'expired_card' => 'required',
            'passport_no' => 'required|min:9|max:9',
            'passport_exp' => 'required',

            'chainase'=> 'required',
            'zodiac'=> 'required',
            'tax_card'=> 'required',

            // 'security_card'=> 'required',

            //ที่อยู่ปัจจุบัน
            'address' => 'required',
            'address_street' => 'required',
            'address_drict' => 'required',
            'address_kat' => 'required',
            'address_country' => 'required',
            'address_zip' => 'required',
            'address_accommodation' => 'required',

            //ระดับปริญญาตรี
            'diploma_name' => 'required',
            'diploma_subject' => 'required',
            'diploma_start' => 'required',
            'diploma_stop' => 'required',
            'diploma_gpa' => 'required',



            //กรณีติดต่อฉุกเฉิน
            'contact_family' => 'required',
            'associated' => 'required',
            'address_family' => 'required',
              'phone_family' => 'required|min:10|max:10',

            //
            // //รูป
            // 'profile' => 'required',
            // 'photo_card' => 'required',
            // 'photo_address' => 'required',
            // 'photo_guide' => 'required',
            // 'photo_tl' => 'required',

            'profile' => 'mimes:jpeg,jpg,png|max:2048',


        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'กรุณากรอกชื่อ',
            'first_name.min' => 'ชื่อต้องยาว 2 ตัวอักษรขึ้นไป',
            'first_name.max' => 'ชื่อต้องไม่เกิน 175 ตัวอักษร',

            'last_name.required' => 'กรุณากรอกนามสกุล',
            'last_name.min' => 'นามสกุลต้องยาว 2 ตัวอักษรขึ้นไป',
            'last_name.max' => 'นามสกุลต้องไม่เกิน 175 ตัวอักษร',

            'phone.required' => 'กรุณากรอกโทรศัพท์',
            'phone.min' => 'หมายเลขโทรศัพท์ไม่ถูกต้อง',
            'phone.max' => 'หมายเลขโทรศัพท์ไม่ถูกต้อง',

            'line_id.required'=> 'กรุณากรอกไลน์ไอดี',

            //ที่อยู่ตามทะเบียนบ้าน
            'home.required' => 'กรุณากรอกที่อยู่ตามทะเบียนบ้าน',
            'home_street.required' => 'กรุณากรอกถนน',
            'home_kat.required' => 'กรุณากรอกอำเภอ/เขต',
            'home_dtrict.required' => 'กรุณากรอกตำบล/แขวง',
            'home_country.required' => 'กรุณากรอกจังหวัด',
            'home_zip.required' => 'กรุณากรอกรหัสไปรษณีย์',
            'home_accommodation.required' => 'กรุณากรอกที่พักอาศัยเป็น',

            //ประวัติ
            'birdthday.required' => 'กรุณากรอกวันเดือนปีเกิด',
            'age.required' => 'กรุณากรอกอายุ',
            'sex.required' => 'กรุณากรอกเพศ',
            'nationality.required' => 'กรุณากรอกสัญชาติ',
            'origin.required' => 'กรุณากรอกเชื้อชาติ',
            'religion.required' => 'กรุณากรอกศาสนา',
            'weight.required' => 'กรุณากรอกน้ำหนัก',
            'hight.required' => 'กรุณากรอกส่วนสูง',
            'id_card.required' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
            'id_card.mix' => 'เลขบัตรประชาชนไม่ถูกต้อง',
            'id_card.min' => 'เลขบัตรประชาชนไม่ถูกต้อง',
            'place.required' => 'กรุณากรอกสถานที่ออกบัตร',
            'expired_card.required' => 'กรุณากรอกวันเดือนปีที่บัตรหมดอายุ',
            'passport_no.required' => 'กรุณากรอกเลขที่พาสปอร์ต',
            'passport_no.max' => 'เลขที่พาสปอร์ตไม่ถูกต้อง',
            'passport_no.min' => 'เลขที่พาสปอร์ตไม่ถูกต้อง',
            'passport_exp.required' => 'กรุณากรอกวันเดือนปีที่บัตรหมดอายุ',

            'chainase.required'=> 'กรุณาเลือกปีนักษัตร',
            'zodiac.required'=> 'กรุณาเลือกราศี',
            'tax_card.required'=> 'กรุณากรอกเลขที่ผู้เสียภาษี',
            // 'security_card.required'=> 'กรุณากรอกเลขที่บัตรประกันสัง',

            //ที่อยู่ปัจจุบัน
            'address.required' => 'กรุณากรอกที่อยู่ปัจจุบัน',
            'address_street.required' => 'กรุณากรอกถนน',
            'address_drict.required' => 'กรุณากรอกตำบล/แขวง',
            'address_kat.required' => 'กรุณากรอกอำเภอ/เขต',
            'address_country.required' => 'กรุณากรอกจังหวัด',
            'address_zip.required' => 'กรุณากรอกรหัสไปรษณีย์',
            'home_accommodation.required' => 'กรุณากรอกที่พักอาศัยเป็น',

            //ระดับปริญญาตรี
            'diploma_name.required' => 'กรุณากรอกชื่อสถาบันปริญญาตรี',
            'diploma_subject.required' => 'กรุณากรอกสาขาวิชา',
            'diploma_start.required' => 'กรุณากรอกวันเดือนปีที่เริ่มการศึกษา',
            'diploma_stop.required' => 'กรุณากรอกวันเดือนปีที่จบการศึกษา',
            'diploma_gpa.required' => 'กรุณากรอกเกรดเฉลี่ย',

            //ติดต่อฉุกเฉิน


            'contact_family.required' => 'กรุณากรอกบุคคลที่ติดต่อได้',
            'associated.required' => 'กรุณากรอกสถานะความเกี่ยวข้องเป็น',
            'address_family.required' => 'กรุณากรอกที่อยู่',
            'phone_family.required' => 'กรุณากรอกโทรศัพท์',
            'phone_family.min' => 'หมายเลขโทรศัพท์ไม่ถูกต้อง',
            'phone_family.max' => 'หมายเลขโทรศัพท์ไม่ถูกต้อง',

//
            // 'profile.required' => 'กรุณาเลือกไฟล์รูป',
            'profile.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png .pdf เท่านั้น',
            'profile.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',
            // 'photo_card.required' => 'กรุณาเลือกไฟล์สำเนาบัตรประชาชน',
            // 'photo_card.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png .pdf เท่านั้น',
            // 'photo_card.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',
            // 'photo_address.required' => 'กรุณาเลือกไฟล์สำเนาทะเบียนบ้าน',
            // 'photo_address.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png .pdf เท่านั้น',
            // 'photo_address.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',
            // 'photo_guide.required' => 'กรุณาเลือกไฟล์บัตรไกด์',
            // 'photo_guide.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png .pdf เท่านั้น',
            // 'photo_guide.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',
            // 'photo_tl.required' => 'กรุณาเลือกไฟล์บัตรtl',
            // 'photo_tl.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png .pdf เท่านั้น',
            // 'photo_tl.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',


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
