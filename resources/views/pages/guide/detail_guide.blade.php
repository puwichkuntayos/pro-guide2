
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

<body>

    <!-- need-validation ใช้สำหรับเรียกใช้ validatetion -->

     <div class="container">
         @if($data->status !=2)
       <form  method="POST" action="{{ asset('guides/register/'.$data2->id)}}" enctype="multipart/form-data" >
        <input type="hidden" name="_method" value="PUT">
        @endif

        @csrf
        <input type="hidden" name="invite_id" value="{{ $data->id }}" autocomplete="off">
        <input type="hidden" name="role_id" value="4">

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
                    <!-- @if($data2['profile'] != "")
                    <div class="text-center">
                        <img style="width: 192px; height: 200px;" src="{{$data2->profile}}" class="img-thumbnail">
                    </div>
                     @endif -->

                     <br>
                    @if($data2->checkprofile == 0)
                        <div class="alert alert-danger" role="alert">
                            {{$data2->alertprofile}}
                        </div>      
                     @endif
                   

                    <div class="mb-3">
                      
                      <label for="profile">รูป*</label>
                       
                        <div><input type="file" id="profile" name="profile" placeholder="" value=""></div>
                    </div>
                    {{-- end profile --}}
                     

                    <div class="row">
                        
                        {{-- ชื่อ --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3 ">
                            <label for="first_name">ขื่อ*</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder=""  value="{{ $data2->first_name}}" {{ $errors->has('first_name') ? ' autofocus' : '' }}>
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
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="last_name">นามสกุล*</label>
                            <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last_name"  name="last_name" value="{{ $data2->last_name}}" {{ $errors->has('last_name') ? ' autofocus' : '' }}>
                            <!-- is-invalid ใช้สำหรับเรียกใช้ validate -->
                            <div class="">
                                @if ($errors->has('last_name'))

                                <strong class="text-danger">{{ $errors->first('last_name') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end นามสกุล --}}

                        {{-- ชื่อ(ภาษาอังกฤษ) --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="first_name_en">ชื่อ(ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" name='first_name_en'  value="{{$data2->first_name_en}}">
                        </div>
                        {{-- end ชื่อ(ภาษาอังกฤษ) --}}

                        {{--นามสกุล(ภาษาอังกฤษ)--}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="last_name_en">นามสกุล(ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" name='last_name_en'  value="{{$data2->last_name_en}}">
                        </div>
                        {{-- นามสกุล(ภาษาอังกฤษ) --}}
                    </div>
                    <div class="row">

                        {{-- ชื่อเล่น --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="nickname">ชื่อเล่น</label>
                            <input type="text" class="form-control" name='nickname' value="{{$data2->nickname}}" >
                        </div>
                        {{-- end ชื่อเล่น --}}

                        {{-- เพศ --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="sex">เพศ</label>
                            <select class="custom-select" name='sex' id="sex" >
                                <option value="" >กรุณาเลือก</option>
                                <option value="ชาย" @if($data2->sex == "ชาย"){{"selected"}}@endif>ชาย</option>
                                <option value="หญิง"  @if($data2->sex == "หญิง"){{"selected"}}@endif>หญิง</option>

                            </select>
                            <div class="">
                                @if ($errors->has('sex'))

                                <strong class="text-danger">{{ $errors->first('sex') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end เพศ --}}

                        {{-- email --}}
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control disabled" disabled name='email' id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->email }}">
                        </div>
                        {{-- end email --}}

                    </div>
                    <br>
                    {{-- phone --}}
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="phone">โทรศัพท์</label>
                            <input type="text" class="form-control"  id="phone" name="phone" value="{{ $data2->phone}}">
                                <div class="">
                                    @if ($errors->has('phone'))

                                    <strong class="text-danger">{{ $errors->first('phone') }}</strong>

                                    @endif
                                </div>
                        </div>
                        {{-- end phone --}}

                        {{-- line id --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="c">Line ID</label>
                            <input type="text" class="form-control"  name="line_id" value="{{$data2->line_id}}">
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
                    @if($data2->checkaddress == 0)
                            <div class="col-12" >
                                <div class="alert alert-danger" role="alert">
                                    {{$data2->alertaddress}}
                              </div>
                            </div>
                        @endif
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="home">ที่อยู่ตามทะเบียนบ้าน</label>
                        <input type="text" class="form-control" name="home"  id="home" value="{{$data2->home}}">
                           <div class="">
                                @if ($errors->has('home'))

                                <strong class="text-danger">{{ $errors->first('home') }}</strong>

                                @endif
                              </div>
                    </div>
                    {{-- end col --}}

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">อำเภอ/เขต</label>
                        <input type="text" class="form-control" name='home_kat'  value="{{$data2->home_kat}}">
                        <div class="">
                            @if ($errors->has('home_kat'))

                            <strong class="text-danger">{{ $errors->first('home_kat') }}</strong>

                            @endif
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">จังหวัด</label>
                        <input type="text" class="form-control"  name='home_country' value="{{$data2->home_country}}">
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
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">ถนน</label>
                        <input type="text" class="form-control"  name='home_street' value="{{$data2->home_street}}">
                        <div class="">
                            @if ($errors->has('home_street'))

                            <strong class="text-danger">{{ $errors->first('home_street') }}</strong>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">ตำบล/แขวง</label>
                        <input type="text" class="form-control"  name='home_dtrict'value="{{$data2->home_dtrict}}">
                        <div class="">
                            @if ($errors->has('home_dtrict'))

                            <strong class="text-danger">{{ $errors->first('home_dtrict') }}</strong>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control"  name='home_zip' value="{{$data2->home_zip}}">
                        <div class="">
                            @if ($errors->has('home_zip'))

                            <strong class="text-danger">{{ $errors->first('home_zip') }}</strong>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">บ้านที่อาศัยเป็น</label>
                        <select class="custom-select" name='home_accommodation' >
                            <!-- <option value="0">กรุณาเลือก</option> -->
                            <option value="อาศัยกับครอบครัว" @if($data2->home_accommodation == "อาศัยกับครอบครัว"){{"selected"}}@endif>อาศัยกับครอบครัว</option>
                            <option value="บ้านตัวเอง" @if($data2->home_accommodation == "บ้านตัวเอง"){{"selected"}}@endif>บ้านตัวเอง</option>
                            <option value="บ้านเช่า" @if($data2->home_accommodation == "บ้านเช่า"){{"selected"}}@endif>บ้านเช่า</option>
                            <option value="หอพัก" @if($data2->home_accommodation == "หอพัก"){{"selected"}}@endif>หอพัก</option>
                            <option value="อื่นๆ" @if($data2->home_accommodation == "อื่นๆ"){{"selected"}}@endif>อื่นๆ</option>

                        </select>
                    </div>




                </div>
                {{-- end row--}}

                <br>
                <div class="pb-3"><hr></div>    
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="">ที่อยู่ปัจจุบัน</label>
                        <input type="text" class="form-control"  name='address' value="{{$data2->address}}">
                        <div class="">
                            @if ($errors->has('address'))

                            <strong class="text-danger">{{ $errors->first('address') }}</strong>

                            @endif
                        </div>
                    </div>
                    {{-- end col --}}

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">อำเภอ/เขต</label>
                        <input type="text" class="form-control"  name='address_kat' value="{{$data2->address_kat}}">
                        <div class="">
                            @if ($errors->has('address_kat'))

                            <strong class="text-danger">{{ $errors->first('address_kat') }}</strong>

                            @endif
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">จังหวัด</label>
                        <input type="text" class="form-control"  name='address_country' value="{{$data2->address_country}}">
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
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">ถนน</label>
                        <input type="text" class="form-control"  name='address_street' value="{{$data2->address_street}}">
                         <div class="">
                            @if ($errors->has('address_street'))

                            <strong class="text-danger">{{ $errors->first('address_street') }}</strong>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">ตำบล/แขวง</label>
                        <input type="text" class="form-control"  name='address_drict' value="{{$data2->address_drict}}">
                        <div class="">
                            @if ($errors->has('address_drict'))

                            <strong class="text-danger">{{ $errors->first('address_drict') }}</strong>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control"  name='address_zip' value="{{$data2->address_zip}}">
                        <div class="">
                            @if ($errors->has('address_zip'))

                            <strong class="text-danger">{{ $errors->first('address_zip') }}</strong>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="">บ้านที่อาศัยเป็น</label>
                        <select class="custom-select" name='address_accommodation' >
                            <!-- <option value="">กรุณาเลือก</option> -->
                            <option value="อาศัยกับครอบครัว" @if($data2->address_accommodation == "อาศัยกับครอบครัว"){{"selected"}}@endif>อาศัยกับครอบครัว</option>
                            <option value="บ้านตัวเอง" @if($data2->address_accommodation == "บ้านตัวเอง"){{"selected"}}@endif>บ้านตัวเอง</option>
                            <option value="บ้านเช่า" @if($data2->address_accommodation == "บ้านเช่า"){{"selected"}}@endif>บ้านเช่า</option>
                            <option value="หอพัก" @if($data2->address_accommodation == "หอพัก"){{"selected"}}@endif>หอพัก</option>
                            <option value="อื่นๆ" @if($data2->address_accommodation == "อื่นๆ"){{"selected"}}@endif>อื่นๆ</option>
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
                     @if($data2->checkproname == 0)
                            <div class="col-12" >
                                <div class="alert alert-danger" role="alert">
                                    {{$data2->alertproname}}
                              </div>
                            </div>
                        @endif

                    <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                        <label for="">วัน/เดือน/ปีเกิด</label>
                        <input type="date" class="form-control" name='birdthday'  value="{{$data2->birdthday}}">
                         <div class="">
                            @if ($errors->has('birdthday'))

                            <strong class="text-danger">{{ $errors->first('birdthday') }}</strong>

                            @endif
                        </div>
                    </div>

                        {{-- ปีนักกษัตร --}}
                        <div class="col-lg-2 col-md-4 col-sm-12 mb-3">
                            <label for="">ปีนักกษัตร</label>
                            <select class="custom-select" name='chainase' >
                                <option value="">-</option>
                                <option value="ปีชวด"  @if($data2->chainase == "ปีชวด"){{"selected"}}@endif>ปีชวด, ปีหนู</option>
                                <option value="ปีฉลู" @if($data2->chainase == "ปีฉลู"){{"selected"}}@endif>ปีฉลู, ปีวัว</option>
                                <option value="ปีขาล" @if($data2->chainase == "ปีขาล"){{"selected"}}@endif>ปีขาล, ปีเสือ</option>
                                <option value="ปีเถาะ" @if($data2->chainase == "ปีเถาะ"){{"selected"}}@endif>ปีเถาะ, ปีกระต่าย</option>
                                <option value="ปีมะโรง" @if($data2->chainase == "ปีมะโรง"){{"selected"}}@endif>ปีมะโรง, ปีงูใหญ่</option>
                                <option value="ปีมะเส็ง" @if($data2->chainase == "ปีมะเส็ง"){{"selected"}}@endif>ปีมะเส็ง, ปีงูเล็ก</option>
                                <option value="ปีมะเมีย" @if($data2->chainase == "ปีมะเมีย"){{"selected"}}@endif>ปีมะเมีย, ปีม้า</option>
                                <option value="ปีมะแม" @if($data2->chainase == "ปีมะแม"){{"selected"}}@endif>ปีมะแม, แพะ</option>
                                <option value="ปีวอก" @if($data2->chainase == "ปีวอก"){{"selected"}}@endif>ปีวอก, ปีลิง</option>
                                <option value="ปีระกา" @if($data2->chainase == "ปีระกา"){{"selected"}}@endif>ปีระกา, ปีไก่</option>
                                <option value="ปีจอ" @if($data2->chainase == "ปีจอ"){{"selected"}}@endif>ปีจอ, ปีหมา</option>
                                <option value="ปีกุน" @if($data2->chainase == "ปีกุน"){{"selected"}}@endif>ปีกุน, หมู </option>
                            </select>
                            <div class="">
                                @if ($errors->has('chainase'))

                                <strong class="text-danger">{{ $errors->first('chainase') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end ปีนักกษัตร --}}


                        {{-- ราศี --}}
                        <div class="col-lg-2 col-md-4 col-sm-12 mb-3">
                            <label for="">ราศี</label>
                            <select class="custom-select" name='zodiac' >
                                <option value="">-</option>
                                <option value="ราศีเมษ" @if($data2->zodiac == "ราศีเมษ"){{"selected"}}@endif>ราศีเมษ</option>
                                <option value="ราศีพฤษก" @if($data2->zodiac == "ราศีพฤษก"){{"selected"}}@endif>ราศีพฤษก</option>
                                <option value="ราศีเมถุน" @if($data2->zodiac == "ราศีเมถุน"){{"selected"}}@endif>ราศีเมถุน</option>
                                <option value="ราศีกรกฎ" @if($data2->zodiac == "ราศีกรกฎ"){{"selected"}}@endif>ราศีกรกฎ</option>
                                <option value="ราศีสิงห์" @if($data2->zodiac == "ราศีสิงห์"){{"selected"}}@endif>ราศีสิงห์</option>
                                <option value="ราศีกันย์" @if($data2->zodiac == "ราศีกันย์"){{"selected"}}@endif>ราศีกันย์</option>
                                <option value="ราศีตุลย์" @if($data2->zodiac == "ราศีตุลย์"){{"selected"}}@endif>ราศีตุลย์</option>
                                <option value="ราศีพิจิก" @if($data2->zodiac == "ราศีพิจิก"){{"selected"}}@endif>ราศีพิจิก</option>
                                <option value="ราศีธนู" @if($data2->zodiac == "ราศีธนู"){{"selected"}}@endif>ราศีธนู</option>
                                <option value="ราศีมังกร" @if($data2->zodiac == "ราศีมังกร"){{"selected"}}@endif>ราศีมังกร</option>
                                <option value="ราศีกุมภ์" @if($data2->zodiac == "ราศีกุมภ์"){{"selected"}}@endif>ราศีกุมภ์</option>
                                <option value="ราศีมีน" @if($data2->zodiac == "ราศีมีน"){{"selected"}}@endif>ราศีมีน</option>

                            </select>
                            <div class="">
                                @if ($errors->has('zodiac'))

                                <strong class="text-danger">{{ $errors->first('zodiac') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end ราศี --}}

                        {{-- อายุ --}}
                        <div class="col-lg-2 col-md-4 col-sm-12 mb-3">
                            <label for="">อายุ</label>
                            <input type="text" class="form-control" name='age'  value="{{$data2->age}}">
                            <div class="">
                                @if ($errors->has('age'))

                                <strong class="text-danger">{{ $errors->first('age') }}</strong>

                                @endif
                            </div>

                        </div>
                        {{-- end อายุ --}}


                        {{-- สัญชาติ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
                            <label>สัญชาติ</label>
                            <!-- <div class="form-group row"> -->
                                <!-- <label for="" class="col-sm-2 col-form-label">ปี</label> -->
                                <!-- <div class="col-sm-10"> -->
                                    <input type="" class="form-control" name='nationality'  value="{{$data2->nationality}}">
                                    <div class="">
                                        @if ($errors->has('nationality'))

                                        <strong class="text-danger">{{ $errors->first('nationality') }}</strong>

                                        @endif
                                    </div>
                                <!-- </div> -->
                            <!-- </div> -->
                        </div>
                        {{-- end สัญชาติ --}}


                    </div>
                    {{-- end  row --}}




                    <div class="row ">
                        {{-- row start --}}

                        {{-- เชื้อชาติ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">เชื้อชาติ</label>
                            <input type="text" class="form-control" name='origin'  value="{{$data2->origin}}">
                            <div class="">
                                @if ($errors->has('origin'))

                                <strong class="text-danger">{{ $errors->first('origin') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end เชื้อชาติ --}}

                        {{-- ศาสนา --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">ศาสนา</label>
                            <input type="text" class="form-control"  name='religion' value="{{$data2->religion}}">
                            <div class="">
                                @if ($errors->has('religion'))

                                <strong class="text-danger">{{ $errors->first('religion') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end ศาสนา --}}

                        {{-- น้ำหนัก --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">น้ำหนัก</label>
                            <input type="text" class="form-control"  name='weight' value="{{$data2->weight}}">
                            <div class="">
                                @if ($errors->has('weight'))

                                <strong class="text-danger">{{ $errors->first('weight') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end น้ำหนัก --}}

                        {{-- ส่วนสูง --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">ส่วนสูง</label>
                            <input type="text" class="form-control"  name='hight' value="{{$data2->hight}}">
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
                        <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                            <label for="">บัตรประชาชนเลขที่</label>
                            <input type="text" class="form-control"  id="id_card" name='id_card' value="{{$data2->id_card}}">
                            <div class="">
                                @if ($errors->has('id_card'))

                                <strong class="text-danger">{{ $errors->first('id_card') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end บัตรประชาชนเลขที่ --}}

                        {{-- สถานที่ออกบัตร --}}
                        <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                            <label for="">สถานที่ออกบัตร</label>
                            <input type="text" class="form-control"  name='place' value="{{$data2->place}}">
                            <div class="">
                                @if ($errors->has('place'))

                                <strong class="text-danger">{{ $errors->first('place') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end สถานที่ออกบัตร --}}

                        {{-- บัตรหมดอายุ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">บัตรหมดอายุ</label>
                            <input type="date" class="form-control"  name='expired_card' value="{{$data2->expired_card}}">
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
                        <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                            <label for="">เลขที่พาสปอร์ต</label>
                            <input type="text" class="form-control"  name='passport_no' value="{{$data2->passport_no}}">
                            <div class="">
                                @if ($errors->has('passport_no'))

                                <strong class="text-danger">{{ $errors->first('passport_no') }}</strong>

                                @endif
                            </div>
                        </div>
                        {{-- end เลขที่พาสปอร์ต --}}

                        {{-- บัตรหมดอายุ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">บัตรหมดอายุ</label>
                            <input type="date" class="form-control"  name='passport_exp' value="{{$data2->passport_exp}}">
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
                            <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                                <label for="">บัตรผู้เสียภาษีเลขที่</label>
                                <input type="text" class="form-control"  name='tax_card' value="{{$data2->tax_card}}">
                                <div class="">
                                    @if ($errors->has('tax_card'))

                                    <strong class="text-danger">{{ $errors->first('tax_card') }}</strong>

                                    @endif
                                </div>
                            </div>
                            {{-- end บัตรผู้เสียภาษี --}}

                            {{-- บัตรประกันสังคม --}}
                            <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                                <label for="">บัตรประกันสังคมเลขที่</label>
                                <input type="text" class="form-control"  name='security_card' value="{{$data2->security_card}}">
                                
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
                            <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="soldier" id="gridRadios1" value="ได้รับการยกเว้น"  @if($data2->soldier == "ได้รับการยกเว้น"){{"checked"}}@endif>
                                    <label class="form-check-label" for="gridRadios1">
                                        ได้รับการยกเว้น
                                    </label>
                                </div>
                            </div>
                            {{-- --}}

                            {{-- ปลดเป็นทหารกองหนุน --}}
                            <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="soldier" id="gridRadios2" value="ปลดเป็นทหารกองหนุน"  @if($data2->soldier == "ปลดเป็นทหารกองหนุน"){{"checked"}}@endif>
                                    <label class="form-check-label" for="gridRadios2">
                                        ปลดเป็นทหารกองหนุน
                                    </label>
                                </div>
                            </div>
                            {{-- --}}

                            {{-- ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี --}}
                            <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="soldier" id="gridRadios3" value="ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี"  @if($data2->soldier == "ยังไม่ได้รับการเกณฑ์"){{"checked"}}@endif>
                                    <label class="form-check-label" for="gridRadios3">
                                        ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี
                                    </label>
                                </div>
                            </div>
                            {{-- --}}



                            {{-- พ.ศ. ที่จะเกณฑ์ --}}
                            <div class="col-lg-3 col-md-4 col-sm-12 pb-3">

                                <input type="date" class="form-control" name='soldier_year' placeholder="พ.ศ." value="{{$data2->soldier_year}}" >
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
                            @if($data2->checkfamily == 0)
                            <div class="col-12" >
                                <div class="alert alert-danger" role="alert">
                                    {{$data2->alertfamily}}
                              </div>
                            </div>
                        @endif

                            {{-- สถานภาพ --}}
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
                                <label for="">สถานภาพ</label>
                                <select class="custom-select" name='status' >

                                    <option value="โสด" @if($data2->status == "โสด"){{"selected"}}@endif>โสด</option>
                                    <option value="แต่งงาน" @if($data2->status == "แต่งงาน"){{"selected"}}@endif>แต่งงาน</option>
                                    <option value="หม้าย" @if($data2->status == "หม้าย"){{"selected"}}@endif>หม้าย</option>
                                    <option value="แยกกัน/หย่า" @if($data2->status == "แยกกัน/หย่า"){{"selected"}}@endif>แยกกัน/หย่า</option>

                                </select>
                            </div>
                            {{-- end สถานภาพ --}}

                            {{-- กรณีแต่งงาน --}}
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
                                <label for="">กรณีแต่งงาน</label>
                                <select class="custom-select" name='marry' >
                                    <option value="จดทะเบียน"  @if($data2->marry == "จดทะเบียน"){{"selected"}}@endif>จดทะเบียน</option>
                                    <option value="ไม่ได้จดทะเบียน"  @if($data2->marry == "ไม่ได้จดทะเบียน"){{"selected"}}@endif>ไม่ได้จดทะเบียน</option>

                                </select>

                            </div>
                            {{-- end กรณีแต่งงาน --}}
                        </div>
                        {{-- end row --}}


                        {{-- start row --}}
                        <div class="row  pb-3">

                            {{-- บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                                <label for="">ชื่อภรรยา/สามี</label>
                                <input type="text" class="form-control" name='contact_person' value="{{$data2->contact_person}}" >
                            </div>
                            {{-- end บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}

                            {{-- ชื่อสถานที่ทำงาน --}}
                            <div class="col-lg-6 col-md-6 col-sm-12"> <label for="">ชื่อ/สถานที่ทำงาน</label>
                                <input type="text" class="form-control" name='workplace_name' value="{{$data2->workplace_name}}" >
                            </div>
                            {{-- end ชื่อสถานที่ทำงาน --}}


                        </div>
                        {{-- end row --}}



                        {{-- start --}}
                        <div class="row">
                            {{-- ตำแหน่งงาน --}}
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                                <div class="form-group">
                                    <label for="">ตำแหน่ง</label>
                                    <input type="text" class="form-control" name='position_work' value="{{$data2->position_work}}" ></div>

                                    <div class="col-6"> </div>
                                </div>
                                {{-- end ตำแหน่งงาน --}}

                            </div>
                            {{--end start --}}

                            {{-- row start --}}

                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <label>มีบุตร</label>
                                    <input type="text" class="form-control" name='son_max' value="{{$data2->son_max}}" >  
                                </div>
                               

                                <div class="col-lg-3 col-md-4 col-sm-12 ">
                                    <label>จำนวนบุตรที่กำลังเข้าศึกษา</label>
                                    <input type="text" class="form-control" name='son_studying' value="{{$data2->son_studying}}" >  
                                </div>
                               

                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <label>จำนวนบุตรที่ยังไม่ได้เข้าศึกษา</label>
                                    <input type="" class="form-control" name='son_not' width="50px" value="{{$data2->son_not}}" >
                                </div>
                                
                            </div>




<!-- 
                        <div class="col-10">
                            <div class="row">
                                {{-- มีบุตร --}}
                                <div class="col-2">
                                    <label for="">มีบุตร</label>

                                    <div class="form-group">

                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name='son_max'>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="" class="col-sm-3 col-form-label">คน</label>
                                </div>
                                {{-- end มีบุตร--}}
                                <div class="col-4">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label for="">จำนวนบุตรที่กำลังเข้าศึกษา</label>

                                    {{-- จำนวนบุตรที่กำลังจะเข้าศึกษา --}}
                                    <div class="form-group">
                                        
                                        <div class="col-sm-15">
                                            <input type="" class="form-control" name='son_studying'>
                                        </div>
                                    </div>
                                    {{-- end จำนวนบุตรที่กำลังจะเข้าศึกษา --}}
                                </div>


                                {{--จำนวนบุตรที่ยังไม่ได้เข้าศึกษา--}}
                                <div class="col-4">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label for="">จำนวนบุตรที่ยังไม่ได้เข้าศึกษา</label>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">คน</label>
                                        <div class="col-sm-15">
                                            <input type="" class="form-control" name='son_not' width="50px">

                                        </div>
                                    </div>
                                </div>
                                {{-- end จำนวนบุตรที่ยังไม่ได้เข้าศึกษา --}}

                                <div class="col-2">
                                    <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-10 col-form-label">คน</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" class="form-control" name='#' width="50px">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-2"></div>
                    -->

                    
                    {{--end row --}}
                </div>{{-- end ประวัติครอบครัว --}}
            </div>{{--end card --}}



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
                                    <input type="" class="form-control" name='school_name' width="70%" value="{{$data2->school_name}}" >

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
                                    <input type="" class="form-control" name='school_subject' width="50px" value="{{$data2->school_subject}}" >

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
                                    <input type="date" class="form-control" name='school_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->school_start}}" >

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
                                    <input type="date" class="form-control" name='school_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->school_stop}}" >
                                </div>
                            </div>
                        </div>
                        {{-- end จบการศึกษา --}}


                        {{-- เกรดเฉลี่ย --}}
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='school_gpa' width="50px" value="{{$data2->school_gpa}}" >
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
                                    <input type="" class="form-control" name='vocational_name' width="70%" value="{{$data2->vocational_name}}" >

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
                                    <input type="" class="form-control" name='vocational_subject' width="50px" value="{{$data2->vocational_subject}}" >

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
                                    <input type="date" class="form-control" name='vocational_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->vocational_start}}" >

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
                                    <input type="date" class="form-control" name='vocational_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->vocational_stop}}" >

                                </div>
                            </div>
                        </div>
                        {{-- end ถึง --}}
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{-- เกรดเฉลี่ย --}}
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='vocational_gpa' width="50px" value="{{$data2->vocational_gpa}}" >

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
                                    <input type="" class="form-control" name='bachelor_name' width="70%" value="{{$data2->bachelor_name}}" >

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
                                    <input type="" class="form-control" name='bachelor_subject' width="50px" value="{{$data2->bachelor_subject}}" >

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
                                    <input type="date" class="form-control" name='bachelor_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->bachelor_start}}" >

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
                                    <input type="date" class="form-control" name='bachelor_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->bachelor_stop}}" >

                                </div>
                            </div>
                            {{-- end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{--เกรดเฉลี่ย --}}
                            <div class="form-group row">
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='bachelor_gpa' width="50px" value="{{$data2->bachelor_stop}}" >

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
                                    <input type="" class="form-control" name='diploma_name' width="70%" value="{{$data2->diploma_name}}" >
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
                                    <input type="" class="form-control" name='diploma_subject' width="50px" value="{{$data2->diploma_subject}}" >
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
                                    <input type="date" class="form-control" name='diploma_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->diploma_start}}" >
                                    <div class="">
                                        @if ($errors->has('diploma_start'))

                                        <strong class="text-danger">{{ $errors->first('diploma_start') }}</strong>

                                        @endif
                                    </div>

                                </div>
                            </div>
                            {{-- end เริ่มการศึกษา --}}

                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{-- ถึง --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-2 col-md-12 col-sm-12 ">ถึง</label>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='diploma_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->diploma_stop}}" >
                                    <div class="">
                                        @if ($errors->has('diploma_stop'))

                                        <strong class="text-danger">{{ $errors->first('diploma_stop') }}</strong>

                                        @endif
                                    </div>

                                </div>
                            </div>
                            {{--end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{-- เกรดเฉลี่ย --}}
                            <div class="form-group row">
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='diploma_gpa' width="50px" value="{{$data2->diploma_gpa}}" >
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
                                    <input type="" class="form-control" name='postgraduate_name' width="70%" value="{{$data2->postgraduate_name}}" >

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
                                    <input type="" class="form-control" name='postgraduate_subject' width="50px" value="{{$data2->postgraduate_subject}}" >

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
                                    <input type="date" class="form-control" name='postgraduate_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->postgraduate_start}}" >

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
                                    <input type="date" class="form-control" name='postgraduate_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->postgraduate_stop}}" >

                                </div>
                            </div>
                            {{-- end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            {{-- เกรดเฉลี่ย --}}
                            <label>เกรดเฉลี่ย</label>
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='postgraduate_gpa' width="50px" value="{{$data2->postgraduate_gpa}}" >

                                </div>
                            </div>
                            {{-- end เกรดเฉลี่ย --}}
                        </div>
                    </div>

                </div>
            </div>
            {{-- end card --}}


            <br><br><br>{{--แบ่งระหว่างประวัติการศึกษากับประวัติการทำงาน --}}


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
                        @if($data2->checkwork == 0)
                             <div class="col-12" >
                                <div class="alert alert-danger" role="alert">
                                    {{$data2->alertwork}}
                                </div>
                             </div>
                        @endif
                        {{-- สถานที่ทำงาน--}}
                        <div class="col-lg-6 col-md-12 col-sm-12 pb-3">
                            <label for="">สถานที่ทำงาน (ชื่อสถานที่) 1</label>
                            <input type="text" class="form-control" name='workplace' value="{{$data2->workplace}}" >
                        </div>
                        {{--end สถานที่ทำงาน--}}

                        {{--ตำแห่นง --}}
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="">ตำแหน่ง</label>
                            <input type="text" class="form-control" name='position_workplace' value="{{$data2->position_workplace}}" >
                        </div>
                        {{-- end ตำแห่นง  --}}

                    </div>
                    {{-- end row --}}
                    <br>
                    <div class="row">

                        {{--ลักษณะงานและความรับผิดชอบโดยสังเขป --}}
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <label for="">ลักษณะงานและความรับผิดชอบโดยสังเขป</label>
                            <input type="text" class="form-control" name='work_other' value="{{$data2->work_other}}" >
                        </div>
                        {{--end ลักษณะงานและความรับผิดชอบโดยสังเขป --}}

                        {{--ค่าจ้าง --}}
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <label for="">ค่าจ้าง</label>
                            <input type="text" class="form-control" name='work_saraly' value="{{$data2->work_saraly}}" >
                        </div>
                        {{-- end ค่าจ้าง--}}
                    </div>
                    {{--end row --}}
                    <br>

                    <div class="row">

                        <br>


                        {{--ระยะเวลา จาก --}}
                        <div class="col-lg-6 col-md-12 col-sm-12 pb-3">
                            <!-- <div class="form-group row"> -->
                                <label for="" class="col-form-label">ระยะเวลา จาก</label>
                                <!-- <div class="col-sm-8"> -->
                                    <input type="date" class="form-control" name='work_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->work_start}}" >
                                <!-- </div> -->
                            <!-- </div> -->
                        </div>
                        {{--ระยะเวลา จาก --}}


                        <div class="col-lg-6 col-md-12 col-sm-12">
                            {{-- ถึง --}}
                            <!-- <div class="form-group row"> -->
                                <label for="" class="col-sm-2 col-form-label">ถึง</label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="date" class="form-control" name='work_stop' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->work_stop}}" >
                                <!-- </div> -->
                            <!-- </div> -->
                            {{--end ถึง --}}
                        </div>
                        {{-- end col --}}
                    </div>
                    {{-- end row --}}

                    {{-- เหตุผลที่ออก --}}
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">เหตุผลที่ออก</label>
                        <textarea class="form-control" name='because_out' id="exampleFormControlTextarea1" rows="3" >{{$data2->because_out}}</textarea>
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
                         @if($data2->checkwork == 0)
                            <div class="col-12" >
                                <div class="alert alert-danger" role="alert">
                                    {{$data2->alertwork}}
                              </div>
                            </div>
                        @endif

                        {{--ภาษาไทย --}}
                        <div class="col-lg-3 col-md-3 col-sm-12 pb-3">
                            <button type="button" class="btn btn-secondary" style="width: 50%; font-size: 10px;">ภาษาไทย</button>
                        </div>
                        {{-- end ภาษาไทย--}}

                        {{-- พูด(ภาษาไทย)--}}
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group row">
                                <label  style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='speak_th' >
                                        <option value="-">-</option>
                                        <option value="ดี"  @if($data2->speak_th == "ดี"){{"selected"}}@endif>ดี</option>
                                        <option value="ปานกลาง" @if($data2->speak_th == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                                        <option value="พอใช้" @if($data2->speak_th == "พอใช้"){{"selected"}}@endif>พอใช้</option>


                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--end พูด(ภาษาไทย)--}}

                        {{-- อ่าน(ภาษาไทย)--}}
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name='read_th' >
                                       <option value="-">-</option>
                                       <option value="ดี" @if($data2->read_th == "ดี"){{"selected"}}@endif>ดี</option>
                                       <option value="ปานกลาง" @if($data2->read_th == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                                       <option value="พอใช้" @if($data2->read_th == "พอใช้"){{"selected"}}@endif>พอใช้</option>
                                   </select>
                               </div>
                           </div>
                       </div>
                       {{--end อ่าน(ภาษาไทย)--}}

                       {{-- เขียน(ภาษาไทย)--}}
                       <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group row">
                            <label style="margin-left: 20px;" for="">เขียน</label>
                            <div class="col-sm-8">
                                <select class="custom-select" name='write_th' >
                                   <option value="-">-</option>
                                   <option value="ดี" @if($data2->write_th == "ดี"){{"selected"}}@endif>ดี</option>
                                   <option value="ปานกลาง" @if($data2->write_th == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                                   <option value="พอใช้" @if($data2->write_th == "พอใช้"){{"selected"}}@endif>พอใช้</option>

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
                <div class="col-lg-3 col-md-3 col-sm-12 pb-3">
                    <button type="button" class="btn btn-secondary" style="width: 50%;font-size: 10px;">ภาษาอังกฤษ</button>
                </div>
                {{-- พูด(ภาษาอังกฤษ) --}}
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="form-group row">
                        <label style="margin-left: 20px;" for="">พูด</label>
                        <div class="col-sm-8">
                            <select class="custom-select" name='speak_en' >
                               <option value="-">-</option>
                               <option value="ดี" @if($data2->speak_en == "ดี"){{"selected"}}@endif>ดี</option>
                               <option value="ปานกลาง" @if($data2->speak_en == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                               <option value="พอใช้" @if($data2->speak_en == "พอใช้"){{"selected"}}@endif>พอใช้</option>

                           </select>
                       </div>
                   </div>
               </div>
               {{--end พูด(ภาษาอังกฤษ) --}}

               {{-- อ่าน(ภาษาอังกฤษ) --}}
               <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="form-group row">
                    <label style="margin-left: 20px;" for="">อ่าน</label>
                    <div class="col-sm-8">
                        <select class="custom-select" name='read_en' >
                           <option value="-">-</option>
                           <option value="ดี" @if($data2->read_en == "ดี"){{"selected"}}@endif>ดี</option>
                           <option value="ปานกลาง" @if($data2->read_en == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                           <option value="พอใช้" @if($data2->read_en == "พอใช้"){{"selected"}}@endif>พอใช้</option>
                       </select>
                   </div>
               </div>
           </div>
           {{--end อ่าน(ภาษาอังกฤษ) --}}

           {{-- เขียน (ภาษาอังกฤษ) --}}
           <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="form-group row">
                <label style="margin-left: 20px;" for="">เขียน</label>
                <div class="col-sm-8">
                    <select class="custom-select" name='write_en' >
                       <option value="-">-</option>
                       <option value="ดี" @if($data2->write_en == "ดี"){{"selected"}}@endif>ดี</option>
                       <option value="ปานกลาง" @if($data2->write_en == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                       <option value="พอใช้" @if($data2->write_en == "พอใช้"){{"selected"}}@endif>พอใช้</option>

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
    <div class="col-lg-3 col-md-3 col-sm-12 pb-3">
        <button type="button" class="btn btn-secondary" style="width: 50%;font-size: 10px;">ภาษาจีน</button>
    </div>

    {{-- พูด(ภาษาจีน) --}}
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-sm-8">
                <select class="custom-select" name='speak_prc' >    
                   <option value="-">-</option>
                   <option value="ดี" @if($data2->speak_prc == "ดี"){{"selected"}}@endif>ดี</option>
                   <option value="ปานกลาง" @if($data2->speak_prc == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                   <option value="พอใช้" @if($data2->speak_prc == "พอใช้"){{"selected"}}@endif>พอใช้</option>
               </select>
           </div>
       </div>
   </div>
   {{-- end พูด(ภาษาจีน) --}}

   {{-- อ่าน(ภาษาจีน) --}}
   <div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">อ่าน</label>
        <div class="col-sm-8">
            <select class="custom-select" name='read_prc' >
               <option value="-">-</option>
               <option value="ดี" @if($data2->read_prc == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($data2->read_prc == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($data2->read_prc == "พอใช้"){{"selected"}}@endif>พอใช้</option>

           </select>
       </div>
   </div>
</div>
{{-- end อ่าน(ภาษาจีน)  --}}

{{-- เขียน(ภาษาจีน)  --}}
<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">เขียน</label>
        <div class="col-sm-8">
            <select class="custom-select" name='write_prc' >
               <option value="-">-</option>
               <option value="ดี" @if($data2->write_prc == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($data2->write_prc == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($data2->write_prc == "พอใช้"){{"selected"}}@endif>พอใช้</option>
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
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">

            <div class="col-sm-10">
                <input type="text" class="form-control col-sm-10" name='languages_ot[]' placeholder="ภาษาอื่นๆ" value="{{$lng[0]}}" >
            </div>
        </div>
    </div>

    {{-- พูด(ภาษาอื่นๆ) --}}
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-sm-8">
                <select class="form-control " name='languages_ot[]' >
                   <option value="-">-</option>   
                   <option value="ดี" @if($lng[1] == "ดี"){{"selected"}}@endif>ดี</option>
                   <option value="ปานกลาง" @if($lng[1] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                   <option value="พอใช้" @if($lng[1] == "พอใช้"){{"selected"}}@endif>พอใช้</option>
               </select>
           </div>
       </div>
   </div>
   {{-- end พูด(ภาษาอื่นๆ) --}}

   {{-- อ่าน(ภาษาอื่นๆ) --}}
   <div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">อ่าน</label>
        <div class="col-sm-8">
            <select class="form-control " name='languages_ot[]' >
               <option value="-">-</option>
               <option value="ดี" @if($lng[2] == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($lng[2] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($lng[2] == "พอใช้"){{"selected"}}@endif>พอใช้</option>

           </select>
       </div>
   </div>
</div>
{{-- end อ่าน(ภาษาอื่นๆ)  --}}

{{-- เขียน(ภาษาอื่นๆ)  --}}
<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">เขียน</label>
        <div class="col-sm-8">
            <select class="form-control " name='languages_ot[]' >
               <option value="-">-</option>
               <option value="ดี" @if($lng[3] == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($lng[3] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($lng[3] == "พอใช้"){{"selected"}}@endif>พอใช้</option>
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
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">

            <div class="col-sm-10">
                <input type="text" class="form-control col-sm-10" name='languages_v1[]' placeholder="ภาษาอื่นๆ" value="{{$lng1[0]}}" >
            </div>
        </div>
    </div>

    {{-- พูด(ภาษาอื่นๆ) --}}
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-sm-8">
                <select class="form-control " name='languages_v1[]' >
                   <option value="-">-</option>
                   <option value="ดี" @if($lng1[1] == "ดี"){{"selected"}}@endif>ดี</option>
                   <option value="ปานกลาง" @if($lng1[1] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                   <option value="พอใช้" @if($lng1[1] == "พอใช้"){{"selected"}}@endif>พอใช้</option>
               </select>
           </div>
       </div>
   </div>
   {{-- end พูด(ภาษาอื่นๆ) --}}

   {{-- อ่าน(ภาษาอื่นๆ) --}}
   <div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">อ่าน</label>
        <div class="col-sm-8">
            <select class="form-control " name='languages_v1[]' >
               <option value="-">-</option>
               <option value="ดี" @if($lng1[2] == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($lng1[2] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($lng1[2] == "พอใช้"){{"selected"}}@endif>พอใช้</option>

           </select>
       </div>
   </div>
</div>
{{-- end อ่าน(ภาษาอื่นๆ)  --}}

{{-- เขียน(ภาษาอื่นๆ)  --}}
<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">เขียน</label>
        <div class="col-sm-8">
            <select class="form-control " name='languages_v1[]' >
               <option value="-">-</option>
               <option value="ดี" @if($lng1[3] == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($lng1[3] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($lng1[3] == "พอใช้"){{"selected"}}@endif>พอใช้</option>
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
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">

            <div class="col-sm-10">
                <input type="text" class="form-control col-sm-10"  name='languages_v2[]'  placeholder="ภาษาอื่นๆ" value="{{$lng2[0]}}" >
            </div>
        </div>
    </div>

    {{-- พูด(ภาษาอื่นๆ) --}}
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-sm-8">
                <select class="form-control " name='languages_v2[]'  >
                   <option value="-">-</option>
                   <option value="ดี" @if($lng2[1] == "ดี"){{"selected"}}@endif>ดี</option>
                   <option value="ปานกลาง" @if($lng2[1] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
                   <option value="พอใช้" @if($lng2[1] == "พอใช้"){{"selected"}}@endif>พอใช้</option>
               </select>
           </div>
       </div>
   </div>
   {{-- end พูด(ภาษาอื่นๆ) --}}

   {{-- อ่าน(ภาษาอื่นๆ) --}}
   <div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">อ่าน</label>
        <div class="col-sm-8">
            <select class="form-control " name='languages_v2[]'  >
               <option value="-">-</option>
               <option value="ดี" @if($lng2[2] == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($lng2[2] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($lng2[2] == "พอใช้"){{"selected"}}@endif>พอใช้</option>

           </select>
       </div>
   </div>
</div>
{{-- end อ่าน(ภาษาอื่นๆ)  --}}

{{-- เขียน(ภาษาอื่นๆ)  --}}
<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">เขียน</label>
        <div class="col-sm-8">
            <select class="form-control " name='languages_v2[]'  >
               <option value="-">-</option>
               <option value="ดี" @if($lng2[3] == "ดี"){{"selected"}}@endif>ดี</option>
               <option value="ปานกลาง" @if($lng2[3] == "ปานกลาง"){{"selected"}}@endif>ปานกลาง</option>
               <option value="พอใช้" @if($lng2[3] == "พอใช้"){{"selected"}}@endif>พอใช้</option>
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

            @if($data2->checkpic == 0)
                <div class="col-12" >
                    <div class="alert alert-danger" role="alert">
                        {{$data2->alertpic}}
                    </div>
                </div>
            @endif

            {{--กรณีฉุกเฉินที่ติดต่อได้ --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">กรณีฉุกเฉินที่ติดต่อได้</label>
                <input type="text" class="form-control" name='contact_family' value="{{$data2->contact_family}}" >
                <div class="">
                    @if ($errors->has('contact_family'))

                    <strong class="text-danger">{{ $errors->first('contact_family') }}</strong>

                    @endif
                </div>
            </div>
            {{-- end กรณีฉุกเฉินที่ติดต่อได้ --}}

            {{-- เกี่ยวข้องกับผู้สมัคร --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">เกี่ยวข้องกับผู้สมัคร</label>
                <input type="text" class="form-control" name='associated' value="{{$data2->associated}}" >
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
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">ที่อยู่</label>
                <input type="text" class="form-control" name='address_family'  value="{{$data2->address_family}}" >
                <div class="">
                    @if ($errors->has('address_family'))

                    <strong class="text-danger">{{ $errors->first('address_family') }}</strong>

                    @endif
                </div>
            </div>
            {{--end ที่อยู่ --}}

            {{--โทร --}}
            <div class="col-lg-6 col-md-6 col-sm-12">

                <label for="">โทร</label>
                <input type="text" class="form-control" name='phone_family' value="{{$data2->phone_family}}" >
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
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <br>

                {{--ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่ --}}
                <label for="">ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่</label>
                <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease" id="inlineRadio1" value="มี" @if($data2->disease == "มี"){{"checked"}}@endif>
                    <label class="form-check-label" for="inlineRadio1">มี</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease" id="inlineRadio2" value="ไม่เคยมี" @if($data2->disease == "ไม่เคยมี"){{"checked"}}@endif>
                    <label class="form-check-label" for="inlineRadio2">ไม่เคยมี</label>
                </div>
                {{--end ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่ --}}

            </div>
            {{-- ถ้ามีกรุณากรอกโรคประจำตัวของท่าน --}}
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">ถ้ามีกรุณากรอก</label>
                <input type="text" width="50%" class="form-control"  name='identify' value="{{$data2->identify}}">
            </div>
            {{-- end ถ้ามีกรุณากรอกโรคประจำตัวของท่าน --}}

        </div>
        {{--end row --}}
        <br>
        <hr>
        <br>
        <div class="row">
            {{-- ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน--}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน</label>
                <input type="text" class="form-control" name='warranty_job' value="{{$data2->warranty_job}}" >
            </div>
            {{--end ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน--}}

            {{--ตำแหน่ง --}}
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">ตำแหน่ง</label>
                <input type="text" class="form-control" name='position_job' value="{{$data2->position_job}}" >
            </div>
            {{--end ตำแหน่ง --}}
        </div>
        {{--end row --}}
        <br>
        <div class="row">
            {{-- สถานที่ทำงาน --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">สถานที่ทำงาน</label>
                <input type="text" class="form-control" name='office' value="{{$data2->office}}" >
            </div>
            {{-- end สถานที่ทำงาน --}}

            {{-- เบอร์โทร--}}
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">เบอร์โทร</label>
                <input type="text" class="form-control" name='phone_job' value="{{$data2->phone_job}}" >
            </div>
            {{--end เบอร์โทร--}}
        </div>
        {{-- end row --}}
        <br>

        <div class="row">
            {{--เกี่ยวข้องกับผู้สมัครเป็น --}}
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">เกี่ยวข้องกับผู้สมัครเป็น</label>
                <input type="text" class="form-control" name='about' value="{{$data2->about}}" >
            </div>
            {{--end เกี่ยวข้องกับผู้สมัครเป็น --}}
            <div class="col-lg-6 col-md-6 col-sm-12">

            </div>
        </div>
        {{--end row --}}
        <br>



        {{-- photo_card --}}
        <div class="mb-3">
            <label for="photo_card">รูป สำเนาบัตรประชาชน พร้อมลายเซ็น*</label>
            <div><input type="file" id="photo_card" name="photo_card" placeholder="" value="" ></div>
        </div>
        {{-- end photo_card --}}


        {{-- photo_address --}}
        <div class="mb-3">
            <label for="photo_address">รูป สำเนาทะเบียนบ้าน*</label>
            <div><input type="file" id="photo_address" name="photo_address" placeholder="" value=""></div>
        </div>
        {{-- end photo_address --}}


        {{-- photo_guide --}}
        <div class="mb-3">
            <label for="photo_guide">รูป บัตรไกด์*</label>
            <div><input type="file" id="photo_guide" name="photo_guide" placeholder="" value=""></div>
        </div>
        {{-- end photo_guide --}}


        {{-- photo_tl --}}
        <div class="mb-3">
            <label for="photo_tl">รูป บัตรtl*</label>
            <div><input type="file" id="photo_tl" name="photo_tl" placeholder="" value=""></div>
        </div>
        {{-- end photo_tl --}}
        <br><!-- <br><br> -->
        
        @if ( $data->status !=2 )
        <button type="submit" value="บันทึก" class="btn btn-primary ">บันทึกข้อมูล</button>
        @endif
         </form>
    {{-- end: form --}}


                  

                </div>

            </div>
            {{-- end card --}}

       
</div>
     </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="/js/form-validation.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

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

            window.location.href = "{{ session()->get('redirect') }}";
       
    </script>
    @endif




</body>

</html>

{{-- timer: 2000,
  showConfirmButton: false --}}