<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">




    <title>ลงทะเบียนไกด์/TL</title>
</head>



<style>
    body {
        background-color: #fbfbfb;
    }

    body {
        font-family: 'Kanit', sans-serif;
    }
</style>
<?php
$value = '';
?>

<body>
    <!-- need-validation ใช้สำหรับเรียกใช้ validatetion -->
    <!-- class="needs-validation" -->
    <form method="POST" action="{{asset('guides/register')}}" enctype="multipart/form-data" novalidate >
        @csrf
        <input type="hidden" name="invite_id" value="{{ $data->id }}" autocomplete="off">
        <!-- <input type="hidden" name="role_id" value="4"> -->

        <div class="container my-5 ">

            <div class="card">

                <div class="card-body">


                    {{-- header --}}
                    <div class="text-center py-5">
                        <!-- กำหนดค่ารูป -->
                        <img class="d-block mx-auto mb-4" src="{{ asset('images/logos/logo.png') }}" alt="">
                        <h2>ลงทะเบียนไกด์/TL</h2>
                        <p class="lead">กรุณากรอกประวัติส่วนตัวและข้อมูลที่จำเป็นเพื่อลงทะเบียน</p>
                    </div>

                    {{-- end: header --}}

                    {{-- ประวัติส่วนตัว --}}
                    <div class="mb-4">

                        {{-- profile --}}
                        <div class="mb-3">
                            <label for="profile">รูป*</label>
                            <div>
                                <input type="file" id="profile" name="profile" required placeholder="" value="">
                                <div class="">
                                    @if ($errors->has('profile'))

                                    <strong class="text-danger">{{ $errors->first('profile') }}</strong>

                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- end profile --}}

                        <div class="row">
                            {{-- ชื่อ --}}
                            <div class="col-md-3 mb-3">
                                <label for="first_name" class="md-3">ขื่อ*</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="{{ $data->name  ?? old('first_name') }}" {{ $errors->has('first_name') ? ' autofocus' : '' }}>
                                <!--value="{{ old('first_name') ?? $data->name }}" ใช้สำหรับเรียกค่าก่อนหน้า  -->
                                <!-- auto autofocus    -->
                                <div class="">
                                    @if ($errors->has('first_name'))

                                    <strong class="text-danger">{{ $errors->first('first_name') }}</strong>

                                    @endif
                                </div>
                            </div>
                            {{-- end ชื่อ --}}

                            {{-- นามสกุล --}}
                            <div class="col-md-3 mb-3">
                                <label for="last_name" class="md-3">นามสกุล*</label>
                                <input type="text" class="form-control" id="last_name" required name="last_name" value="{{ $data->last_name  ??  old('last_name')  }}" {{ $errors->has('last_name') ? ' autofocus' : '' }}>
                                <!-- is-invalid ใช้สำหรับเรียกใช้ validate -->
                                <div class="">
                                    @if ($errors->has('last_name'))

                                    <strong class="text-danger">{{ $errors->first('last_name') }}</strong>

                                    @endif
                                </div>
                            </div>
                            {{-- end นามสกุล --}}

                            {{-- ชื่อ(ภาษาอังกฤษ) --}}
                            <div class="col-md-3 mb-3">
                                <label for="first_name_en" class="md-3">ชื่อ(ภาษาอังกฤษ)</label>
                                <input type="text" class="form-control" name='first_name_en' value="{{  old('first_name_en')  }}">
                            </div>
                            {{-- end ชื่อ(ภาษาอังกฤษ) --}}

                            {{--นามสกุล(ภาษาอังกฤษ)--}}
                            <div class="col-md-3 mb-3">
                                <label for="last_name_en" class="md-3">นามสกุล(ภาษาอังกฤษ)</label>
                                <input type="text" class="form-control" name='last_name_en' value="{{  old('last_name_en')  }}">
                            </div>
                            {{-- นามสกุล(ภาษาอังกฤษ) --}}
                        </div>
                        <div class="row">

                            {{-- ชื่อเล่น --}}
                            <div class="col-md-3">
                                <label for="nickname" class="md-3">ชื่อเล่น</label>
                                <input type="text" class="form-control" name='nickname' value="{{  old('nickname')  }}">
                            </div>
                            {{-- end ชื่อเล่น --}}

                            {{-- เพศ --}}
                            <div class="col-md-3">
                                <label for="sex" class="md-3">เพศ</label>
                                <select class="custom-select" name='sex' id="sex" >
                                  @if(old('sex')){
                                      <option value="{{(old('sex')}}" selected>{{old('sex')}}</option>
                                  }
                                    <option value="">กรุณาเลือก</option>
                                    <option value="ชาย">ชาย</option>
                                    <option value="หญิง">หญิง</option>

                                </select>
                                 <div class="">
                                    @if ($errors->has('sex'))

                                    <strong class="text-danger">{{ $errors->first('sex') }}</strong>

                                    @endif
                                </div>
                            </div>
                            {{-- end เพศ --}}

                            {{-- email --}}
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="email" class="md-3">Email</label>
                                <input type="email" class="form-control disabled" disabled name='email' id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->email ?? old('sex')}}">
                            </div>
                            {{-- end email --}}

                        </div>
                        <br>
                        {{-- phone --}}
                        <div class="row">
                            <div class="col-md-3">
                                <label for="phone" class="md-3">โทรศัพท์*</label>
                                <input type="number" class="form-control" id="phone" name="phone" required value="{{ $data->phone  ?? old('phone') }}">

                                <div class="">
                                    @if ($errors->has('phone'))

                                    <strong class="text-danger">{{ $errors->first('phone') }}</strong>

                                    @endif
                                </div>
                            </div>
                            {{-- end phone --}}

                            {{-- line id --}}
                            <div class="col-md-3">
                                <label for="line_id" class="md-3">Line ID</label>
                                <input type="text" class="form-control" name="line_id" value="{{old('line_id')}}">
                                <div class="">
                                    @if ($errors->has('line_id'))

                                    <strong class="text-danger">{{ $errors->first('line_id') }}</strong>

                                    @endif
                                </div>
                            </div>
                            {{-- end line id --}}
                            <div class="col-6"></div>
                        </div>

                    </div>
                    {{-- end: ประวัติส่วนตัว --}}
                </div>
                {{-- end: card-body --}}
            </div>
            {{-- end: card --}}



            <br><br><br>
            {{--แบ่งช่องระหว่าง ประวัติส่วนตัว กับที่อยู่--}}



            <div class="card">
                <div class="card-body">
                    {{-- ที่อยู่ --}}
                    <div>
                        <h4 class="mb-3 border-bottom">ที่อยู่</h4>
                    </div>
                    {{-- end: ที่อยู่ --}}

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="home" class="md-3">ที่อยู่ตามทะเบียนบ้าน*</label>
                            <input type="text" class="form-control" name="home" required id="home" value="{{old('home')}}">

                            <div class="">
                                @if ($errors->has('home'))

                                <strong class="text-danger">{{ $errors->first('home') }}</strong>

                                @endif
                              </div>


                        </div>
                        {{-- end col --}}

                        <div class="col-md-3">
                            <label for="" class="md-3">อำเภอ/เขต*</label>
                            <input type="text" class="form-control" required name='home_kat' value="{{old('home_kat')}}">

                            <div class="">
                                @if ($errors->has('home_kat'))

                                <strong class="text-danger">{{ $errors->first('home_kat') }}</strong>

                                @endif
                            </div>
                        </div>


                        <div class="col-md-3">
                            <label for="" class="md-3">จังหวัด*</label>
                            <input type="text" class="form-control" required name='home_country' value="{{old('home_country')}}">

                            <div class="">
                                @if ($errors->has('home_country'))

                                <strong class="text-danger">{{ $errors->first('home_country') }}</strong>

                                @endif
                            </div>
                        </div>

                    </div>
                    {{--end row --}}
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">ถนน*</label>
                            <input type="text" class="form-control" required name='home_street' value="{{old('home_street')}}">

                            <div class="">
                                @if ($errors->has('home_street'))

                                <strong class="text-danger">{{ $errors->first('home_street') }}</strong>

                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">ตำบล/แขวง*</label>
                            <input type="text" class="form-control" required name='home_dtrict' value="{{old('home_dtrict')}}">

                            <div class="">
                                @if ($errors->has('home_dtrict'))

                                <strong class="text-danger">{{ $errors->first('home_dtrict') }}</strong>

                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">รหัสไปรษณีย์*</label>
                            <input type="text" class="form-control" required name='home_zip' value="{{old('home_zip')}}">
                            <div class="">
                                @if ($errors->has('home_zip'))

                                <strong class="text-danger">{{ $errors->first('home_zip') }}</strong>

                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">บ้านที่อาศัยเป็น</label>
                            <select class="custom-select" name='home_accommodation'>
                                <!-- <option value="0">กรุณาเลือก</option> -->
                                @if(old('home_accommodation'))
                                {
                                    <option value="{{old('home_accommodation')}}" selected>{{old('home_accommodation')}}</option>
                                }
                                <option value="อาศัยกับครอบครัว">อาศัยกับครอบครัว</option>
                                <option value="อาศัยกับครอบครัว">อาศัยกับครอบครัว</option>
                                <option value="บ้านตัวเอง">บ้านตัวเอง</option>
                                <option value="บ้านเช่า">บ้านเช่า</option>
                                <option value="หอพัก">หอพัก</option>
                                <option value="อื่นๆ">อื่นๆ</option>

                            </select>


                        </div>




                    </div>
                    {{-- end row--}}

                    <br>
                    <div class="pb-3">
                        <hr>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">ที่อยู่ปัจจุบัน*</label>
                            <input type="text" class="form-control" required name='address' value="{{old('home_zip')}}">

                            <div class="">
                                @if ($errors->has('address'))

                                <strong class="text-danger">{{ $errors->first('address') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end col --}}

                        <div class="col-md-3">
                            <label for="">อำเภอ/เขต*</label>
                            <input type="text" class="form-control" required name='address_kat'  value="{{old('address_kat')}}">

                            <div class="">
                                @if ($errors->has('address_kat'))

                                <strong class="text-danger">{{ $errors->first('address_kat') }}</strong>

                                @endif
                            </div>
                        </div>


                        <div class="col-md-3">
                            <label for="">จังหวัด*</label>
                            <input type="text" class="form-control" required name='address_country'  value="{{old('address_country')}}">

                            <div class="">
                                @if ($errors->has('address_country'))

                                <strong class="text-danger">{{ $errors->first('address_country') }}</strong>

                                @endif
                            </div>
                        </div>

                    </div>
                    {{--end row --}}
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">ถนน*</label>
                            <input type="text" class="form-control" required name='address_street' value="{{old('address_street')}}">

                            <div class="">
                                @if ($errors->has('address_street'))

                                <strong class="text-danger">{{ $errors->first('address_street') }}</strong>

                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">ตำบล/แขวง*</label>
                            <input type="text" class="form-control" required name='address_drict' value="{{old('address_drict')}}">

                            <div class="">
                                @if ($errors->has('address_drict'))

                                <strong class="text-danger">{{ $errors->first('address_drict') }}</strong>

                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">รหัสไปรษณีย์*</label>
                            <input type="text" class="form-control" required name='address_zip' value="{{old('address_zip')}}">

                            <div class="">
                                @if ($errors->has('address_zip'))

                                <strong class="text-danger">{{ $errors->first('address_zip') }}</strong>

                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">บ้านที่อาศัยเป็น</label>
                            <select class="custom-select" name='address_accommodation' value="{{old('address_accommodation')}}">
                                <!-- <option value="">กรุณาเลือก</option> -->
                                @if($old('address_accommodation'))
                                {
                                    <option value="{{old('address_accommodation')}}" selected>{{old('address_accommodation')}}</option>
                                }
                                <option value="อาศัยกับครอบครัว">อาศัยกับครอบครัว</option>
                                <option value="บ้านตัวเอง">บ้านตัวเอง</option>
                                <option value="บ้านเช่า">บ้านเช่า</option>
                                <option value="หอพัก">หอพัก</option>
                                <option value="อื่นๆ">อื่นๆ</option>


                            </select>
                        </div>




                    </div>
                    {{-- end row--}}
                </div>
                {{--end: card-body --}}
            </div>
            {{--end: card --}}


            <br><br><br>
            {{-- แบ่งช่องระหว่างที่อยู่กับประวัติครอบครัว --}}


            {{-- caed --}}
            <div class="card">
                <div class="card-body">
                    {{-- ประวัติส่วนตัว --}}
                    <h4 class="mb-3 pb-2 border-bottom">ประวัติส่วนตัว</h4>
                    {{-- end ประวัติส่วนตัว --}}


                    <div class="row">
                        <div class="col-md-3">
                            <label for="">วัน/เดือน/ปีเกิด*</label>
                            <input type="date" class="form-control" required name='birdthday' value="{{old('birdthday')}}">
                            <div class="">
                                @if ($errors->has('birdthday'))

                                <strong class="text-danger">{{ $errors->first('birdthday') }}</strong>

                                @endif
                            </div>
                        </div>

                        {{-- ปีนักกษัตร --}}
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="">ปีนักกษัตร</label>
                            <select class="custom-select" name='chainase'>

                              @if(old('chainase')){
                                  <option value="{{old('chainase')}}" selected>{{old('chainase')}}</option>
                              }
                                <option value="">-</option>
                                <option value="ปีชวด">ปีชวด, ปีหนู</option>
                                <option value="ปีฉลู">ปีฉลู, ปีวัว</option>
                                <option value="ปีขาล">ปีขาล, ปีเสือ</option>
                                <option value="ปีเถาะ">ปีเถาะ, ปีกระต่าย</option>
                                <option value="ปีมะโรง">ปีมะโรง, ปีงูใหญ่</option>
                                <option value="ปีมะเส็ง">ปีมะเส็ง, ปีงูเล็ก</option>
                                <option value="ปีมะเมีย">ปีมะเมีย, ปีม้า</option>
                                <option value="ปีมะแม">ปีมะแม, แพะ</option>
                                <option value="ปีวอก">ปีวอก, ปีลิง</option>
                                <option value="ปีระกา">ปีระกา, ปีไก่</option>
                                <option value="ปีจอ">ปีจอ, ปีหมา</option>
                                <option value="ปีกุน">ปีกุน, หมู </option>
                            </select>
                            <div class="">
                                @if ($errors->has('chainase'))

                                <strong class="text-danger">{{ $errors->first('chainase') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end ปีนักกษัตร --}}


                        {{-- ราศี --}}
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="">ราศี</label>
                            <select class="custom-select" name='zodiac'>
                              @if(old('chainase')){
                                  <option value="{{old('zodiac')}}" selected>{{old('zodiac')}}</option>
                              }
                                <option value="">-</option>
                                <option value="ราศีเมษ">ราศีเมษ</option>
                                <option value="ราศีพฤษก">ราศีพฤษก</option>
                                <option value="ราศีเมถุน">ราศีเมถุน</option>
                                <option value="ราศีกรกฎ">ราศีกรกฎ</option>
                                <option value="ราศีสิงห์">ราศีสิงห์</option>
                                <option value="ราศีกันย์">ราศีกันย์</option>
                                <option value="ราศีตุลย์">ราศีตุลย์</option>
                                <option value="ราศีพิจิก">ราศีพิจิก</option>
                                <option value="ราศีธนู">ราศีธนู</option>
                                <option value="ราศีมังกร">ราศีมังกร</option>
                                <option value="ราศีกุมภ์">ราศีกุมภ์</option>
                                <option value="ราศีมีน">ราศีมีน</option>

                            </select>
                            <div class="">
                                @if ($errors->has('zodiac'))

                                <strong class="text-danger">{{ $errors->first('zodiac') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end ราศี --}}

                        {{-- อายุ --}}
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="">อายุ*</label>
                            <input type="text" class="form-control" required value="{{ $data->age  ?? old('age') }}" name='age' >
                            <div class="">
                                @if ($errors->has('age'))

                                <strong class="text-danger">{{ $errors->first('age') }}</strong>

                                @endif
                            </div>

                        </div>
                        {{-- end อายุ --}}


                        {{-- สัญชาติ --}}
                        <div class="col-md-3">
                            <label>สัญชาติ*</label>
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <input type="" class="form-control" required value="{{ $data->nationality  ?? old('nationality') }}" name='nationality' >
                                    <div class="">
                                        @if ($errors->has('nationality'))

                                        <strong class="text-danger">{{ $errors->first('nationality') }}</strong>

                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end สัญชาติ --}}


                    </div>
                    {{-- end  row --}}




                    <div class="row ">
                        {{-- row start --}}

                        {{-- เชื้อชาติ --}}
                        <div class="col-md-3 pb-3">
                            <label for="">เชื้อชาติ*</label>
                            <input type="text" class="form-control" required value="{{ $data->origin  ?? old('origin') }}" name='origin' >
                            <div class="">
                                @if ($errors->has('origin'))

                                <strong class="text-danger">{{ $errors->first('origin') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end เชื้อชาติ --}}

                        {{-- ศาสนา --}}
                        <div class="col-md-3">
                            <label for="">ศาสนา*</label>
                            <input type="text" class="form-control" required value="{{ $data->religion  ?? old('religion') }}" name='religion'>
                            <div class="">
                                @if ($errors->has('religion'))

                                <strong class="text-danger">{{ $errors->first('religion') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end ศาสนา --}}

                        {{-- น้ำหนัก --}}
                        <div class="col-md-3">
                            <label for="">น้ำหนัก*</label>
                            <input type="text" class="form-control" required value="{{ $data->weight  ?? old('weight') }}" name='weight'>
                            <div class="">
                                @if ($errors->has('weight'))

                                <strong class="text-danger">{{ $errors->first('weight') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end น้ำหนัก --}}

                        {{-- ส่วนสูง --}}
                        <div class="col-md-3">
                            <label for="">ส่วนสูง*</label>
                            <input type="text" class="form-control" required value="{{ $data->hight  ?? old('hight') }}" name='hight'>
                            <div class="">
                                @if ($errors->has('hight'))

                                <strong class="text-danger">{{ $errors->first('hight') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end ส่วนสูง --}}

                    </div>
                    {{-- end row --}}


                    {{-- row start --}}
                    <div class="row pb-3">
                        {{-- บัตรประชาชนเลขที่ --}}
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="">บัตรประชาชนเลขที่*</label>
                            <input type="text" class="form-control" required value="{{ $data->id_card  ?? old('id_card') }}" id="id_card" name='id_card'>
                            <div class="">
                                @if ($errors->has('id_card'))

                                <strong class="text-danger">{{ $errors->first('id_card') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end บัตรประชาชนเลขที่ --}}

                        {{-- สถานที่ออกบัตร --}}
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="">สถานที่ออกบัตร*</label>
                            <input type="text" class="form-control" required value="{{ $data->place  ?? old('place') }}" name='place'>
                            <div class="">
                                @if ($errors->has('place'))

                                <strong class="text-danger">{{ $errors->first('place') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end สถานที่ออกบัตร --}}

                        {{-- บัตรหมดอายุ --}}
                        <div class="col-md-3">
                            <label for="">บัตรหมดอายุ*</label>
                            <input type="date" class="form-control" required value="{{ $data->expired_card  ?? old('expired_card') }}" name='expired_card'>
                            <div class="">
                                @if ($errors->has('expired_card'))

                                <strong class="text-danger">{{ $errors->first('expired_card') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end บัตรหมดอายุ --}}

                    </div>
                    {{-- end row --}}


                    {{-- start row --}}
                    <div class="row pb-3">
                        {{-- เลขที่พาสปอร์ต --}}
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="">เลขที่พาสปอร์ต*</label>
                            <input type="text" class="form-control" required value="{{ $data->passport_no  ?? old('passport_no') }}" name='passport_no'>
                            <div class="">
                                @if ($errors->has('passport_no'))

                                <strong class="text-danger">{{ $errors->first('passport_no') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end เลขที่พาสปอร์ต --}}

                        {{-- บัตรหมดอายุ --}}
                        <div class="col-md-3">
                            <label for="">บัตรหมดอายุ*</label>
                            <input type="date" class="form-control" required value="{{ $data->passport_exp  ?? old('passport_exp') }}" name='passport_exp'>
                            <div class="">
                                @if ($errors->has('passport_exp'))

                                <strong class="text-danger">{{ $errors->first('passport_exp') }}</strong>

                                @endif
                            </div>
                        </div>

                        <div class="col-4"></div>
                        {{-- end บัตรหมดอายุ --}}




                    </div>
                    {{-- end row --}}


                    {{-- start row --}}
                    <div class="row pb-4">
                        {{-- บัตรผู้เสียภาษี --}}
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="">บัตรผู้เสียภาษีเลขที่</label>
                            <input type="text" class="form-control" name='tax_card' value="{{old('tax_card')}}">
                            <div class="">
                                @if ($errors->has('tax_card'))

                                <strong class="text-danger">{{ $errors->first('tax_card') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end บัตรผู้เสียภาษี --}}

                        {{-- บัตรประกันสังคม --}}
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="">บัตรประกันสังคมเลขที่</label>
                            <input type="text" class="form-control" name='security_card' value="{{old('security_card')}}">

                        </div>
                        {{-- end บัตรประกันสังคม --}}
                        <div class="col-2"></div>

                    </div>
                    {{-- end row --}}

                    {{-- ภาวะทางทหาร --}}
                    <div class="pb-3">ภาวะทางทหาร</div>

                    {{-- start row --}}
                    <div class="row">




                        {{-- ได้รับการยกเว้น --}}
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="soldier" id="gridRadios1" value="ได้รับการยกเว้น" {{old('soldier')=='ได้รับการยกเว้น' ? checked:checked}} >
                                <label class="form-check-label" for="gridRadios1">
                                    ได้รับการยกเว้น
                                </label>
                            </div>
                        </div>
                        {{-- --}}

                        {{-- ปลดเป็นทหารกองหนุน --}}
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="soldier" id="gridRadios2" value="ปลดเป็นทหารกองหนุน" value="ได้รับการยกเว้น" {{old('soldier')=='ได้รับการยกเว้น' ? checked:''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    ปลดเป็นทหารกองหนุน
                                </label>
                            </div>
                        </div>
                        {{-- --}}

                        {{-- ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี --}}
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="soldier" id="gridRadios3" value="ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี" {{old('soldier')=='ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี' ? checked:''}}>
                                <label class="form-check-label" for="gridRadios3">
                                    ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี
                                </label>
                            </div>
                        </div>
                        {{-- --}}



                        {{-- พ.ศ. ที่จะเกณฑ์ --}}
                        <div class="col-md-3">

                            <input type="date" class="form-control" name='soldier_year' placeholder="พ.ศ.">
                        </div>


                    </div>
                    {{-- end row --}}



                </div>
            </div>
            {{-- end card --}}


            <br><br><br>
            {{-- แบ่งช่องระหว่างประวัติส่วนตัวกับ ประวัติครอบครัว --}}


            {{-- start cart --}}
            <div class="card">
                <div class="card-body">
                    <h3>ประวัติครอบครัว</h3>
                    <hr>

                    {{-- start row --}}
                    <div class="row pb-3">
                        {{-- สถานภาพ --}}
                        <div class="col-md-3">
                            <label for="">สถานภาพ</label>
                            <select class="custom-select" name='status'>

                                <option value="โสด">โสด</option>
                                <option value="แต่งงาน">แต่งงาน</option>
                                <option value="หม้าย">หม้าย</option>
                                <option value="แยกกัน/หย่า">แยกกัน/หย่า</option>

                            </select>
                        </div>
                        {{-- end สถานภาพ --}}

                        {{-- กรณีแต่งงาน --}}
                        <div class="col-md-3">
                            <label for="">กรณีแต่งงาน</label>
                            <select class="custom-select" name='marry'>
                                <option value="จดทะเบียน">จดทะเบียน</option>
                                <option value="ไม่ได้จดทะเบียน">ไม่ได้จดทะเบียน</option>

                            </select>

                        </div>
                        {{-- end กรณีแต่งงาน --}}
                    </div>
                    {{-- end row --}}


                    {{-- start row --}}
                    <div class="row  pb-3">

                        {{-- บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">ชื่อภรรยา/สามี</label>
                            <input type="text" class="form-control" name='contact_person'>
                        </div>
                        {{-- end บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}

                        {{-- ชื่อสถานที่ทำงาน --}}
                        <div class="col-lg-6 col-md-6 col-sm-12"> <label for="">ชื่อ/สถานที่ทำงาน</label>
                            <input type="text" class="form-control" name='workplace_name'>
                        </div>
                        {{-- end ชื่อสถานที่ทำงาน --}}


                    </div>
                    {{-- end row --}}



                    {{-- start --}}
                    <div class="row">
                        {{-- ตำแหน่งงาน --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">ตำแหน่ง</label>
                                <input type="text" class="form-control" name='position_work'></div>

                            <div class="col-6"> </div>
                        </div>
                        {{-- end ตำแหน่งงาน --}}

                    </div>
                    {{--end start --}}

                    {{-- row start --}}

                    <div class="row">
                        <div class="col-md-4">
                            <label>มีบุตร</label>
                            <input type="text" class="form-control" name='son_max'>
                        </div>


                        <div class="col-md-4">
                            <label>จำนวนบุตรที่กำลังเข้าศึกษา</label>
                            <input type="text" class="form-control" name='son_studying'>
                        </div>


                        <div class="col-md-4">
                            <label>จำนวนบุตรที่ยังไม่ได้เข้าศึกษา</label>
                            <input type="" class="form-control" name='son_not' width="50px">
                        </div>

                    </div>






                </div>
                {{--end row --}}
            </div>
            {{-- end ประวัติครอบครัว --}}




            <br><br><br>
            {{-- แบ่งช่องระหว่างประวัติครอบครัวกับ ประวัติการศึกษา --}}


             {{-- start card --}}
            <div class="card">
                <div class="card-body">
                    {{-- ประวัติการศึกษา --}}
                    <div>
                        <h3>ประวัติการศึกษา</h3>
                    </div>
                    {{-- end ประวัติการศึกษา --}}
                    <hr>
                    {{-- start row --}}
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                           <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; -->

                            {{-- ชื่อสถาบันการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-3 col-md-12 col-sm-12 col-form-label mt-4 mb-3">มัธยมศึกษา</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>ชื่อสถาบันการศึกษา</label>
                                    <input type="" class="form-control" name='school_name' width="70%" value="">

                                </div>
                            </div>
                            {{-- end ชื่อสถาบันการศึกษา --}}
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>

                            {{-- สาขาวิชา --}}

                            <div class="form-group row">

                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>สาขาวิชา</label>
                                    <input type="" class="form-control" name='school_subject' width="50px" value="">

                                </div>
                            </div>
                        </div>
                        {{-- end สาขาวิชา --}}
                    </div>
                    {{-- end row --}}

                    {{-- start row --}}
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">

                           <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; -->

                            {{-- เริ่มการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label"></label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>เริ่ม</label>
                                    <input type="date" class="form-control" name='school_start' placeholder="วัน/เดือน/ปี พ.ศ">

                                </div>
                            </div>
                            {{-- end เริ่มการศึกษา --}}

                        </div>
                        {{-- จบการศึกษา --}}
                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="form-group row">
                                <label for="" class="col-lg-2 col-md-12 col-sm-12 col-form-label">ถึง</label>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='school_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ">
                                </div>
                            </div>
                        </div>
                        {{-- end จบการศึกษา --}}


                        {{-- เกรดเฉลี่ย --}}
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='school_gpa' width="50px">
                                </div>
                            </div>
                        </div>
                        {{-- end เกรดเฉลี่ย --}}
                    </div>
                    {{-- end row --}}
                    <hr>


                    {{-- start row --}}
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; -->

                            {{-- ชื่อสถาบันการศึกษา --}}
                            <div class="form-group row">

                                <label for="" class="col-lg-3 col-md-12 col-sm-12 mt-4 mb-3">ปวช.</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>ชื่อสถาบันการศึกษา</label>
                                    <input type="" class="form-control" name='vocational_name' width="70%">

                                </div>
                            </div>
                            {{-- end ชื่อสถาบันการศึกษา --}}

                        </div>
                        {{-- สาขาวิชา --}}
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                            <label>สาขาวิชา</label>
                            <div class="form-group row">

                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='vocational_subject' width="50px" >

                                </div>
                            </div>
                        </div>
                        {{-- end สาขาวิชา --}}
                    </div>
                    {{-- end row --}}

                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">

                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; -->

                            {{-- เริ่มการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-4 col-md-12 col-sm-12 col-form-label"></label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                     <label>เริ่ม</label>
                                    <input type="date" class="form-control" name='vocational_start' placeholder="วัน/เดือน/ปี พ.ศ" >

                                </div>
                            </div>
                            {{-- end เริ่มการศึกษา --}}

                        </div>

                        {{-- ถึง --}}
                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="form-group row">
                                <label for="" class="col-lg-2 col-md-12 col-sm-12">ถึง</label>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='vocational_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" >

                                </div>
                            </div>
                        </div>
                        {{-- end ถึง --}}
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{-- เกรดเฉลี่ย --}}
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='vocational_gpa' width="50px" >

                                </div>
                            </div>

                        </div>
                        {{-- end เกรดเฉลี่ย --}}
                    </div>
                    {{-- end row --}}

                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                           <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; -->

                            {{-- ชื่อสถาบันการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-3 col-md-12 col-sm-12 mt-4 mb-3">ปวท./ปวส.</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>ชื่อสถาบันการศึกษา</label>
                                    <input type="" class="form-control" name='bachelor_name' width="70%" >

                                </div>
                            </div>
                            {{-- end ชื่อสถาบันการศึกษา --}}
                        </div>

                        {{-- สาขาวิชา --}}
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                            <label>สาขาวิชา</label>
                            <div class="form-group row">

                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='bachelor_subject' width="50px">

                                </div>
                            </div>
                        </div>
                        {{-- end สาขาวิชา --}}
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            {{-- เริ่มการศึกษา  --}}
                           <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; -->

                            <div class="form-group row">
                                <label for="" class="col-lg-4 col-md-12 col-sm-12"></label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>เริ่ม</label>
                                    <input type="date" class="form-control" name='bachelor_start' placeholder="วัน/เดือน/ปี พ.ศ" >

                                </div>
                            </div>
                            {{-- end เริ่มการศึกษา --}}

                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{-- ถึง --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-2 col-md-12 col-sm-12 col-form-label">ถึง</label>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='bachelor_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" >

                                </div>
                            </div>
                            {{-- end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{--เกรดเฉลี่ย --}}
                            <div class="form-group row">
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='bachelor_gpa' width="50px" >

                                </div>
                            </div>
                            {{-- end เกรดเฉลี่ย --}}
                        </div>
                        {{-- end col --}}
                    </div>
                    {{-- end row --}}
                    <hr>

                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                          <!--   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; -->

                            {{-- ชื่อสถาบันการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-3 col-md-12 col-sm-12 mt-4 mb-3">ปริญญาตรี</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>ชื่อสถาบันการศึกษา</label>
                                    <input type="" class="form-control" name='diploma_name' width="70%" >
                                    <div class="">
                                    @if ($errors->has('diploma_name'))

                                    <strong class="text-danger">{{ $errors->first('diploma_name') }}</strong>

                                    @endif
                                </div>
                                </div>
                            </div>
                            {{-- end ชื่อสถาบันการศึกษา --}}

                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                            <label>สาขาวิชา</label>
                            {{-- สาขาวิชา --}}
                            <div class="form-group row">

                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='diploma_subject' width="50px">
                                    <div class="">
                                    @if ($errors->has('diploma_subject'))

                                    <strong class="text-danger">{{ $errors->first('diploma_subject') }}</strong>

                                    @endif
                                </div>
                                </div>
                            </div>
                            {{-- end สาขาวิชา --}}

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">

                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; -->

                            {{-- เริ่มการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-4 col-md-12 col-sm-12 col-form-label"></label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                     <label>เริ่ม</label>
                                    <input type="date" class="form-control" name='diploma_start' placeholder="วัน/เดือน/ปี พ.ศ">
                                    <div class="">
                                @if ($errors->has('diploma_start'))

                                <strong class="text-danger">{{ $errors->first('diploma_start') }}</strong>

                                @endif
                            </div>


                            </div>
                                </div>
                            </div>

                            {{-- end เริ่มการศึกษา --}}




                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{-- ถึง --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-2 col-md-12 col-sm-12 ">ถึง</label>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='diploma_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ">
                                     <div class="">
                                    @if ($errors->has('diploma_stop'))

                                    <strong class="text-danger">{{ $errors->first('diploma_stop') }}</strong>

                                    @endif
                                </div>


                            </div>
                                </div>
                            </div>
                            {{--end ถึง --}}


                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{-- เกรดเฉลี่ย --}}
                            <div class="form-group row">
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='diploma_gpa' width="50px">
                                    <div class="">
                                    @if ($errors->has('diploma_gpa'))

                                    <strong class="text-danger">{{ $errors->first('diploma_gpa') }}</strong>

                                    @endif
                                </div>
                                </div>
                            </div>
                            {{-- end เกรดเฉลี่ย --}}

                        </div>
                        {{-- end col --}}
                    </div>
                    {{-- end row --}}
                    <hr>

                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                           <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; -->

                            {{-- ชื่อสถาบันการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-4 col-md-12 col-sm-12 mt-4 mb-3">สูงกว่าปริญญาตรี</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label>ชื่อสถาบันการศึกษา</label>
                                    <input type="" class="form-control" name='postgraduate_name' width="70%">

                                </div>
                            </div>
                            {{-- end ชื่อสถาบันการศึกษา --}}

                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <br>
                            <label>สาขาวิชา</label>
                            {{-- สาขาวิชา --}}
                            <div class="form-group row">

                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='postgraduate_subject' width="50px" >

                                </div>
                            </div>
                            {{-- end สาขาวิชา --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">

                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; -->

                            {{-- เริ่มการศึกษา --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-4 col-md-12 col-sm-12 col-form-label"></label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                     <label>เริ่ม</label>
                                    <input type="date" class="form-control" name='postgraduate_start' placeholder="วัน/เดือน/ปี พ.ศ" >

                                </div>
                            </div>
                            {{-- end เริ่มการศึกษา --}}

                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{-- ถึง --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-2 col-md-12 col-sm-12 col-form-label">ถึง</label>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='postgraduate_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ">

                                </div>
                            </div>
                            {{-- end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            {{-- เกรดเฉลี่ย --}}
                            <label>เกรดเฉลี่ย</label>
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='postgraduate_gpa' width="50px">

                                </div>
                            </div>
                            {{-- end เกรดเฉลี่ย --}}
                        </div>
                    </div>

                </div>
            </div>
            {{-- end card --}}
            <br><br><br>

            {{--start card--}}
            <div class="card">
                <div class="card-body">
                    {{-- รายละเอียดของงานที่ผ่านมาเรียงจากปัจจุบันก่อน --}}
                    <center>
                        <h3>รายละเอียดของงานที่ผ่านมาเรียงจากปัจจุบันก่อน</h3>
                    </center>
                    <!-- <button type="button" class="btn btn-primary  pime">+ เพิ่มสถานที่ทำงาน</button> -->
                    <!-- <button type="button" class="btn btn-danger   lob">- ลบสถานที่ทำงาน</button> -->
                    {{-- end รายละเอียดของงานที่ผ่านมาเรียงจากปัจจุบันก่อน --}}
                    <hr>

                    {{-- ที่ทำงานปัจจุบัน --}}
                    <div>
                        <h3>ที่ทำงานปัจจุบัน</h3>
                    </div>

                    {{--end ที่ทำงานปัจจุบัน --}}



                    <br>
                    {{--สถานที่ทำงาน --}}
                    <div class="row">
                        {{-- สถานที่ทำงาน--}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">สถานที่ทำงาน (ชื่อสถานที่) 1</label>
                            <input type="text" class="form-control" name='workplace'>
                        </div>
                        {{--end สถานที่ทำงาน--}}

                        {{--ตำแห่นง --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">ตำแหน่ง</label>
                            <input type="text" class="form-control" name='position_workplace'>
                        </div>
                        {{-- end ตำแห่นง  --}}

                    </div>
                    {{-- end row --}}
                    <br>
                    <div class="row">

                        {{--ลักษณะงานและความรับผิดชอบโดยสังเขป --}}
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="">ลักษณะงานและความรับผิดชอบโดยสังเขป</label>
                            <input type="text" class="form-control" name='work_other'>
                        </div>
                        {{--end ลักษณะงานและความรับผิดชอบโดยสังเขป --}}

                        {{--ค่าจ้าง --}}
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="">ค่าจ้าง</label>
                            <input type="text" class="form-control" name='work_saraly'>
                        </div>
                        {{-- end ค่าจ้าง--}}
                    </div>
                    {{--end row --}}
                    <br>

                    <div class="row">

                        <br>


                        {{--ระยะเวลา จาก --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-md-5 col-form-label">ระยะเวลา จาก</label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <input type="date" class="form-control" name='work_start' placeholder="วัน/เดือน/ปี พ.ศ">
                                </div>
                            </div>
                        </div>
                        {{--ระยะเวลา จาก --}}


                        <div class="col-lg-6 col-md-6 col-sm-12">
                            {{-- ถึง --}}
                            <div class="form-group row">
                                <label for="" class="col-sm-2  col-md-5 col-form-label">ถึง</label>
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <input type="date" class="form-control" name='work_stop' placeholder="วัน/เดือน/ปี พ.ศ">
                                </div>
                            </div>
                            {{--end ถึง --}}
                        </div>
                        {{-- end col --}}
                    </div>
                    {{-- end row --}}

                    {{-- เหตุผลที่ออก --}}
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">เหตุผลที่ออก</label>
                        <textarea class="form-control" name='because_out' id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    {{-- end เหตุผลที่ออก--}}

                </div>
                {{--end card-body --}}
            </div>
            {{-- end card --}}


            <br><br><br>
            {{--ระหว่าง ประวัติการทำงานกับความถนัดทางภาษา --}}

            <div class="card">
                <div class="card-body">
                    {{-- ความถนัดทางภาษา --}}
                    <center>
                        <h3>ความถนัดทางภาษา</h3>
                    </center>
                    {{-- ความถนัดทางภาษา --}}
                    <hr>
                    <br>
                    <div class="row">
                        {{--ภาษาไทย --}}
                        <div class="col-md-3">
                            <button type="button" class="btn btn-secondary" style="width: 50%;font-size: 10px;">ภาษาไทย</button>
                        </div>
                        {{-- end ภาษาไทย--}}

                        {{-- พูด(ภาษาไทย)--}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='speak_th'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>


                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--end พูด(ภาษาไทย)--}}

                        {{-- อ่าน(ภาษาไทย)--}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='read_th'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--end อ่าน(ภาษาไทย)--}}

                        {{-- เขียน(ภาษาไทย)--}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">เขียน</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='write_th'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--end เขียน(ภาษาไทย)--}}
                    </div>
                    {{--end row --}}
                    <br>


                    {{-- ภาษาอังกฤษ --}}
                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-secondary" style="width: 50%;font-size: 10px;">ภาษาอังกฤษ</button>
                        </div>
                        {{-- พูด(ภาษาอังกฤษ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='speak_en'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--end พูด(ภาษาอังกฤษ) --}}

                        {{-- อ่าน(ภาษาอังกฤษ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='read_en'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--end อ่าน(ภาษาอังกฤษ) --}}

                        {{-- เขียน (ภาษาอังกฤษ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">เขียน</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='write_en'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--end เขียน (ภาษาอังกฤษ)--}}

                    </div>
                    {{-- end ภาษาอังกฤษ --}}
                    <br>

                    {{-- ภาษาจีน --}}
                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-secondary" style="width: 50%;font-size: 10px;">ภาษาจีน</button>
                        </div>

                        {{-- พูด(ภาษาจีน) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='speak_prc'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end พูด(ภาษาจีน) --}}

                        {{-- อ่าน(ภาษาจีน) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='read_prc'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end อ่าน(ภาษาจีน)  --}}

                        {{-- เขียน(ภาษาจีน)  --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">เขียน</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='write_prc'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end เขียน(ภาษาจีน)  --}}

                    </div>
                    {{-- end ภาษาจีน --}}
                    <br>


                    <br>

                    {{-- ภาษาอื่นๆ --}}
                    <center>
                        <h3 class="col pb-1">ภาษาอื่นๆ</h3>
                    </center>
                    {{-- ภาษาอื่นๆ --}}
                    <hr class="pb-2">
                    {{-- ภาษาอื่นๆ --}}

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control col-sm-10" name='languages_ot[]' placeholder="ภาษาอื่นๆ">
                                </div>
                            </div>
                        </div>

                        {{-- พูด(ภาษาอื่นๆ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_ot[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end พูด(ภาษาอื่นๆ) --}}

                        {{-- อ่าน(ภาษาอื่นๆ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_ot[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end อ่าน(ภาษาอื่นๆ)  --}}

                        {{-- เขียน(ภาษาอื่นๆ)  --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">เขียน</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_ot[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        {{-- end เขียน(ภาษาอื่นๆ)  --}}

                    </div>
                    <hr>
                    {{-- end ภาษาอื่นๆ --}}
                    {{-- ภาษาอื่นๆ --}}

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control col-sm-10" name='languages_v1[]' placeholder="ภาษาอื่นๆ">
                                </div>
                            </div>
                        </div>

                        {{-- พูด(ภาษาอื่นๆ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_v1[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end พูด(ภาษาอื่นๆ) --}}

                        {{-- อ่าน(ภาษาอื่นๆ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_v1[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end อ่าน(ภาษาอื่นๆ)  --}}

                        {{-- เขียน(ภาษาอื่นๆ)  --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">เขียน</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_v1[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        {{-- end เขียน(ภาษาอื่นๆ)  --}}

                    </div>
                    <hr>
                    {{-- end ภาษาอื่นๆ --}}
                    {{-- ภาษาอื่นๆ --}}

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control col-sm-10" name='languages_v2[]' placeholder="ภาษาอื่นๆ">
                                </div>
                            </div>
                        </div>

                        {{-- พูด(ภาษาอื่นๆ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_v2[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end พูด(ภาษาอื่นๆ) --}}

                        {{-- อ่าน(ภาษาอื่นๆ) --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_v2[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end อ่าน(ภาษาอื่นๆ)  --}}

                        {{-- เขียน(ภาษาอื่นๆ)  --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">เขียน</label>
                                <div class="col-sm-8">
                                    <select class="form-control " name='languages_v2[]'>
                                        <option value="-">-</option>
                                        <option value="ดี">ดี</option>
                                        <option value="ปานกลาง">ปานกลาง</option>
                                        <option value="พอใช้">พอใช้</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        {{-- end เขียน(ภาษาอื่นๆ)  --}}

                    </div>
                    {{-- end ภาษาอื่นๆ --}}

                </div>
                {{--end card-body --}}
            </div>
            {{-- end card --}}


            <br><br><br>
            {{--ระหว่างความถนัดทางภาษากับบุคคลที่ติดต่อได้--}}

            <div class="card">
                <div class="card-body">

                    <div class="row">
                        {{--กรณีฉุกเฉินที่ติดต่อได้ --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">บุคคลกรณีฉุกเฉินที่ติดต่อได้*</label>
                            <input type="text" class="form-control" required name='contact_family'>

                            <div class="">
                                @if ($errors->has('contact_family'))

                                <strong class="text-danger">{{ $errors->first('contact_family') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end กรณีฉุกเฉินที่ติดต่อได้ --}}

                        {{-- เกี่ยวข้องกับผู้สมัคร --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">เกี่ยวข้องกับผู้สมัคร*</label>
                            <input type="text" class="form-control" required name='associated'>

                            <div class="">
                                @if ($errors->has('associated'))

                                <strong class="text-danger">{{ $errors->first('associated') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end เกี่ยวข้องกับผู้สมัคร --}}

                    </div>
                    {{--end row --}}
                    <br>

                    <div class="row">
                        {{--ที่อยู่ --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">ที่อยู่*</label>
                            <input type="text" class="form-control" required name='address_family'>

                            <div class="">
                                @if ($errors->has('address_family'))

                                <strong class="text-danger">{{ $errors->first('address_family') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{--end ที่อยู่ --}}

                        {{--โทร --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="">โทร*</label>
                            <input type="text" class="form-control" required name='phone_family'>

                            <div class="">
                                @if ($errors->has('phone_family'))

                                <strong class="text-danger">{{ $errors->first('phone_family') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{--end โทร --}}


                    </div>
                    {{-- end row --}}
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <br>

                            {{--ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่ --}}
                            <label for="">ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่</label>
                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="disease" id="inlineRadio1" value="มี">
                                <label class="form-check-label" for="inlineRadio1">มี</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="disease" id="inlineRadio2" value="ไม่เคยมี">
                                <label class="form-check-label" for="inlineRadio2">ไม่เคยมี</label>
                            </div>
                            {{--end ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่ --}}

                        </div>
                        {{-- ถ้ามีกรุณากรอกโรคประจำตัวของท่าน --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">ถ้ามีกรุณากรอก</label>
                            <input type="text" width="50%" class="form-control" name='identify'>
                        </div>
                        {{-- end ถ้ามีกรุณากรอกโรคประจำตัวของท่าน --}}

                    </div>
                    {{--end row --}}
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        {{-- ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน--}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน</label>
                            <input type="text" class="form-control" name='warranty_job'>
                        </div>
                        {{--end ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน--}}

                        {{--ตำแหน่ง --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">ตำแหน่ง</label>
                            <input type="text" class="form-control" name='position_job'>
                        </div>
                        {{--end ตำแหน่ง --}}
                    </div>
                    {{--end row --}}
                    <br>
                    <div class="row">
                        {{-- สถานที่ทำงาน --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">สถานที่ทำงาน</label>
                            <input type="text" class="form-control" name='office'>
                        </div>
                        {{-- end สถานที่ทำงาน --}}

                        {{-- เบอร์โทร--}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">เบอร์โทร</label>
                            <input type="number" class="form-control " name='phone_job'>
                        </div>
                        {{--end เบอร์โทร--}}
                    </div>
                    {{-- end row --}}
                    <br>

                    <div class="row">
                        {{--เกี่ยวข้องกับผู้สมัครเป็น --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">เกี่ยวข้องกับผู้สมัครเป็น</label>
                            <input type="text" class="form-control" name='about'>
                        </div>
                        {{--end เกี่ยวข้องกับผู้สมัครเป็น --}}
                        <div class="col-lg-6 col-md-6 col-sm-12">

                        </div>
                    </div>
                    {{--end row --}}
                    <br> <br>








                </div>


            </div>
            {{-- end card --}}
            <br><br>






            <div class="card">
                <div class="card-body">
                    <div>
                        <h3>อัพโหลดไฟล์</h3>
                    </div>
                    {{-- end อัพโหลดไฟล์ --}}
                    <hr>


                    {{-- photo_card --}}
                    <div class="mb-3">
                        <label for="photo_card">รูป สำเนาบัตรประชาชน พร้อมลายเซ็น*</label>
                        <div>

                            <input type="file" id="photo_card" required name="photo_card" placeholder="" value="">
                            <div class="">
                                @if ($errors->has('photo_card'))

                                <strong class="text-danger">{{ $errors->first('photo_card') }}</strong>

                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- end photo_card --}}


                    {{-- photo_address --}}
                    <div class="mb-3">
                        <label for="photo_address">รูป สำเนาทะเบียนบ้าน*</label>
                        <div>

                            <input type="file" id="photo_address" required name="photo_address" placeholder="" value="">
                            <div class="">
                                @if ($errors->has('photo_address'))

                                <strong class="text-danger">{{ $errors->first('photo_address') }}</strong>

                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- end photo_address --}}


                    {{-- photo_guide --}}
                    <div class="mb-3">
                        <label for="photo_guide">รูป บัตรไกด์*</label>
                        <div>

                            <input type="file" id="photo_guide" required name="photo_guide" placeholder="" value="">
                            <div class="">
                                @if ($errors->has('photo_guide'))

                                <strong class="text-danger">{{ $errors->first('photo_guide') }}</strong>

                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- end photo_guide --}}


                    {{-- photo_tl --}}
                    <div class="mb-3">
                        <label for="photo_tl">รูป บัตรtl*</label>
                        <div>

                            <input type="file" id="photo_tl" required name="photo_tl" placeholder="" value="">
                            <div class="">
                                @if ($errors->has('photo_tl'))

                                <strong class="text-danger">{{ $errors->first('photo_tl') }}</strong>

                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- end photo_tl --}}

                    <button type="submit" value="บันทึก" class="btn btn-primary">บันทึกข้อมูล</button>

                    <br>

                    <br><br>
                </div>
            </div>
            {{-- end card --}}








        </div>
        </div> {{--end: contrainer --}}
        </div>
        </div>
    </form>
    {{-- end: form --}}

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="/js/form-validation.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>



    @if(session()->has('message'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session()->get('message') }}",
            focusConfirm: false,
            // showCancelButton: false,
            // closeOnConfirm: false,
            // closeOnCancel: false,
            allowOutsideClick: false,
        }).then(function() {

            window.location.reload();
        });
    </script>
    @endif

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'ลงทะเบียนสำเร็จแล้ว',
            text: "กรุณารอ",
            focusConfirm: false,
            allowOutsideClick: false,

            timer: 3000,
        }).then(function() {

            window.location.href = "{{ session()->get('redirect') }}";
        });
    </script>
    @endif



</body>

</html>

{{-- timer: 2000,
  showConfirmButton: false --}}
