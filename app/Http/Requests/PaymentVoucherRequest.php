<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class PaymentVoucherRequest extends FormRequest
{
  public function authorize()
  {
      return true;
  }

  public function rules()
  {
      return [
          // 'bill' => 'required',
          // 'price' => 'required',
          'bname' => 'required',

      ];
  }

  public function messages()
  {
      return [
          // 'bill.required' => 'กรุณากรอกรายการ',
          // 'price.required' => 'กรุณากรอกราคา',
          'bname.required' => 'กรุณากรอกชื่อบัญชี',
      ];
  }

  public function validator()
  {
    $rules = $this->rules();

  // if ($this->method()=='PUT') {
  //
  //   $rules['code'].=','.$this->id;
  // }
  // dd($this->rules());
  return Validator::make($this->input(), $rules, $this->messages(), $this->attributes());
  }

  public function attributes()
  {
      return [];

  }
}
