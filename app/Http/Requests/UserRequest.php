<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserRequest extends FormRequest
{
    protected $rules = [
        'username' => 'required|valid_username|unique:users,username',
        
        'name' => 'required|min:2|max:175',
        'email' => 'required|email',
        'role_id' => 'required',

        'file1' => 'mimes:jpeg,jpg,png|max:1000',


    ];

    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return $this->getPostRules();
            case 'PUT':
                return $this->getPutRules();
            default:
                return $this->rules;
        }
    }

    private function getPostRules()
    {
        $rules = $this->rules;

        $rules['password'] =  'required|string|min:4';
        return $rules;
    }

    private function getPutRules()
    {
        $id = isset($this->id) ? $this->id: null;
        $rules['username'] =  'required|valid_username|unique:users,username,'.$id;
        return $this->rules;
    }

    public function messages()
    {
        return [
            'username.required' => 'กรุณากรอกชื่อ',
            'username.valid_username' => ':attribute อนุญาตให้ใช้เฉพาะตัวอักษร (a-z), ตัวเลข (0-9), และเครื่องหมายมหัพภาค (.) และยาว 4 ตัวอักษรขึ้นไป',
            'username.unique' => ':attribute นี้มีผู้อื่นใช้แล้ว, ลองใช้ชื่ออื่น',

            'password.regex' => 'โปรดเลือกรหัสผ่านที่ปลอดภัยยิ่งขึ้น ลองใช้ตัวอักษร ตัวเลข และสัญลักษณ์ผสมกัน',
            'password.min' => 'รหัสผ่านต้องใช้ 4 ตัวอักษรขึ้นไป',
            
            'name.required' => 'กรุณากรอกชื่อ',
            'name.max' => 'ชื่อต้องไม่เกิน 175 ตัวอักษร',
            'name.min' => 'ชื่อต้องยาว 2 ตัวอักษรขึ้นไป',

            'email.required' => 'กรุณากรอก:attribute',

            'email.email' => 'อีเมลไม่ถูกต้อง',
            'email.unique' => ':attribute นี้มีผู้อื่นใช้แล้ว, ลองใช้:attribute อื่น',

            'role_id.required' => 'กรุณาเลือกบทบาท',

            // 'file1.required' => 'กรุณาใส่รูปภาพ',
            'file1.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png เท่านั้น',
            'file1.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',
        ];
    }

    public function validator()
    {
        Validator::extend('valid_username', function($name, $value){
            return preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{4,30}$/', $value);
        }); 
        

        $rules = $this->rules();

        if($this->method()=='PUT'){

            $rules['username'] =  'required|valid_username|unique:users,username,'.$this->id;
            
            if( !empty($this->email) ){
                $rules['email'] =  'email|unique:users,email,'.$this->id;
            }
        }

        if( $this->method()=='POST' ){
            $rules['password'] =  'required|string|min:4';
        }

        $v = Validator::make($this->input(), $rules, $this->messages(), $this->attributes());

        // $v->sometimes('username', 'valid_username', function ($input) {
        //     // dd($input);
        //     return preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{4,30}$/', $input->username);
        // });

        $abc = '123';

        // $v->sometimes('email', 'unique:users,email', function ($input) {

        //     echo $abc; die;

        //     return $input->email !== Auth::user()->email;
        // });

        if( $v->fails() ){

            // return response()->json([
            //     'errors' => $v->errors(),
            //     'code' => 422,
            // ]);

            // $v->messages = 'ข้อมูลที่ระบุไม่ถูกต้อง';
        }

        return $v;
    }

    public function attributes()
    {
        return [
            'username' => 'ชื่อผู้ใช้',
            'email' => 'อีเมลล์',
        ];
    
    }

    // public function response(array $errors)
    // {
        
    //     if ($this->ajax() || $this->wantsJson())
    //     {
    //         return new JsonResponse($errors, 422);
    //     }

    //     return $this->redirector->to($this->getRedirectUrl())
    //             ->withInput($this->except($this->dontFlash))
    //             ->withErrors($errors, $this->errorBag);
    // }

    // public function failedValidation(Validator $validator) {
    //     $errors = $validator->errors()->all();

            
    //     throw new HttpResponseException(response()->json(['status'=>0, 'errors'=>$errors]));
    // }

    // protected function failedValidation(Validator $validator)
    // {
    //     $errors = (new ValidationException($validator))->errors();
    //     throw new HttpResponseException(
    //         response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
    //     );
    // }

    
}