<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>ไกด์/TL</title>
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
    <div class="container" >
        <nav class="">
           <!--  <div class=""> -->
           
                 <div class="nav nav-tabs nav-pills flex-column flex-sm-row nav-sm-justified" id="nav-tab" role="tablist">
                    <a  class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ตรวจสอบ</a>
                    <a  class="nav-item nav-link" id="nav-personalid-tab" data-toggle="tab" href="#nav-personalid" role="tab" aria-controls="nav-personalid" aria-selected="false">บัตรประชาชน</a>
                    <a  class="nav-item nav-link" id="nav-homeid-tab" data-toggle="tab" href="#nav-homeid" role="tab" aria-controls="nav-homeid" aria-selected="false">ทะเบียนบ้าน</a>
                    <a  class="nav-item nav-link" id="nav-guidecard-tab" data-toggle="tab" href="#nav-guidecard" role="tab" aria-controls="nav-guidecard" aria-selected="false">บัตรไกด์</a>
                    <a class="nav-item nav-link" id="nav-tlcard-tab" data-toggle="tab" href="#nav-tlcard" role="tab" aria-controls="nav-tlcard" aria-selected="false">บัตร tl</a>
                </div>
            
  
            <!-- </div> -->
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <!-- ตรวจสอบ -->
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
        @if($data->status ==2)
       <form class="needs-validation" method="POST" action="{{ asset('guides/'.$data->id)}}" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="_method" value="PUT">
        @endif

        @csrf
        <input type="hidden" name="invite_id" value="{{ $data->id }}" autocomplete="off">
        <input type="hidden" name="role_id" value="4">

        <div class="card">

            <div class="card-body">
                <div class="my-4">
                    <div class="d-flex align-items-start">
                        <a class="btn btn-light" href="/guides"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        <!-- <h1 class="ml-2">{{ $data->name }}</h1> -->&nbsp;&nbsp;&nbsp;
                        @if($data->status == 2)
                        <h3><span style="color: white;" class="badge badge-warning">{{ $data->state()->name }}</span></h3>
                        @elseif($data->status == 4)
                            <h3> <span class="badge badge-danger">{{ $data->state()->name }}</span></h3>
                        @else
                        <h3> <span class="badge badge-success">{{ $data->state()->name }}</span></h3>
                        @endif

                        <!-- <span class="ml-1 ui-status  {{ $data->state()->type }}">{{ $data->state()->name }}</span> -->
                    </div>
                </div>

                {{-- header --}}
                <div class="text-center py-5">
                    <!-- กำหนดค่ารูป -->
                    <img class="d-block mx-auto mb-4" src="{{ asset('images/logos/logo.png') }}" alt="">
                    <h2>ใบลงทะเบียนไกด์/TL</h2>
                    <!-- <p class="lead">กรุณากรอกประวัติส่วนตัวและข้อมูลที่จำเป็นเพื่อลงทะเบียน</p> -->
                </div>

                {{-- end: header --}}

                {{-- ประวัติส่วนตัว --}}
                <div class="mb-4">

                    {{-- profile --}}
                    @if($data2['profile'] != "")
                    <div class="text-center">
                        <img style="width: 192px; height: 200px;" src="{{$data2->profile}}" class="img-thumbnail">
                    </div>
                     @endif
                     <br>
                    <!-- <div class="mb-3">
                      
                      <label for="profile">รูป*</label>
                       
                        <div><input type="file" id="profile" name="profile" placeholder="" value=""></div>
                    </div> -->
                    {{-- end profile --}}

                    <div class="row">
                        {{-- ชื่อ --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3" >
                            <label for="first_name">ขื่อ*</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" readonly="1" value="{{ $data2->first_name}}" {{ $errors->has('first_name') ? ' autofocus' : '' }}>
                            <!--value="{{ old('first_name') ?? $data->name }}" ใช้สำหรับเรียกค่าก่อนหน้า  -->
                            <!-- auto autofocus    -->
                            <div class="invalid-feedback">


                                Valid first name is required.
                            </div>
                        </div>
                        {{-- end ชื่อ --}}

                        {{-- นามสกุล --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="last_name">นามสกุล*</label>
                            <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last_name" readonly="1" name="last_name" value="{{ $data2->last_name}}" {{ $errors->has('last_name') ? ' autofocus' : '' }}>
                            <!-- is-invalid ใช้สำหรับเรียกใช้ validate -->
                            {{-- start invalid --}}
                            <div class="invalid-feedback">
                                @if ($errors->has('last_name'))
                                {{ $errors->first('last_name') }}
                                @else
                                กรุณากรอกนามสกุล
                                @endif

                            </div>
                            {{-- end invalid --}}
                        </div>
                        {{-- end นามสกุล --}}

                        {{-- ชื่อ(ภาษาอังกฤษ) --}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="first_name_en">ชื่อ(ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" name='first_name_en' readonly="1" value="{{$data2->first_name_en}}">
                        </div>
                        {{-- end ชื่อ(ภาษาอังกฤษ) --}}

                        {{--นามสกุล(ภาษาอังกฤษ)--}}
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <label for="last_name_en">นามสกุล(ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" name='last_name_en' readonly="1" value="{{$data2->last_name_en}}">
                        </div>
                        {{-- นามสกุล(ภาษาอังกฤษ) --}}
                    </div>
                    <div class="row">

                        {{-- ชื่อเล่น --}}
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <label for="nickname">ชื่อเล่น</label>
                            <input type="text" class="form-control" name='nickname' value="{{$data2->nickname}}" readonly="1">
                        </div>
                        {{-- end ชื่อเล่น --}}

                        {{-- เพศ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <label for="sex">เพศ</label>
                            <select class="custom-select" name='sex' id="sex" disabled="1">
                                <option value="-" >กรุณาเลือก</option>
                                <option value="ชาย" @if($data2->sex == "ชาย"){{"selected"}}@endif>ชาย</option>
                                <option value="หญิง"  @if($data2->sex == "หญิง"){{"selected"}}@endif>หญิง</option>

                            </select>
                        </div>
                        {{-- end เพศ --}}

                        {{-- email --}}
                        <div class="col-lg-6 col-md-4 col-sm-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control disabled" disabled name='email' id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->email }}">
                        </div>
                        {{-- end email --}}

                    </div>
                    <br>
                    {{-- phone --}}
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="phone">โทรศัพท์</label>
                            <input type="text" class="form-control" readonly="1" id="phone" name="phone" required value="{{ $data2->phone}}">

                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        {{-- end phone --}}

                        {{-- line id --}}
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <label for="c">Line ID</label>
                            <input type="text" class="form-control" readonly="1" name="line_id" value="{{$data2->line_id}}">
                        </div>
                        {{-- end line id --}}
                    </div>

                </div>
                {{-- end: ประวัติส่วนตัว --}}
                 @if ( $data->status ==2 )
                  <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-warning" role="alert">
                            <div class="row col-lg-12 col-md-6 col-sm-4">
                                <div class="custom-control custom-radio">
                                    <input id="checkprofile" name="checkprofile" type="radio" class="custom-control-input" required="" value="1" checked="1">
                                    <label class="custom-control-label" for="checkprofile">ผ่าน</label>
                                </div>
                                <div class="custom-control custom-radio" style="margin-left: 20px;">
                                    <input id="checkprofile2" name="checkprofile" type="radio" class="custom-control-input" required="" value="0">
                                    <label class="custom-control-label" for="checkprofile2">ไม่ผ่าน</label>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                                <label for="alertprofile">หมายเหตุ</label>
                               <textarea class="form-control" id="alertprofile" rows="3" name="alertprofile"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
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

                    <div class="col-lg-6 col-md-4 col-sm-12 pb-3">
                        <label for="home">ที่อยู่ตามทะเบียนบ้าน</label>
                        <input type="text" class="form-control" name="home" readonly="1" id="home" value="{{$data2->home}}">
                    </div>
                    {{-- end col --}}

                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">อำเภอ/เขต</label>
                        <input type="text" class="form-control" name='home_kat' readonly="1" value="{{$data2->home_kat}}">
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">จังหวัด</label>
                        <input type="text" class="form-control" readonly="1" name='home_country' value="{{$data2->home_country}}">
                    </div>

                </div>
                {{--end row --}}
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">ถนน</label>
                        <input type="text" class="form-control" readonly="1" name='home_street' value="{{$data2->home_street}}">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">ตำบล/แขวง</label>
                        <input type="text" class="form-control" readonly="1" name='home_dtrict'value="{{$data2->home_dtrict}}">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" readonly="1" name='home_zip' value="{{$data2->home_zip}}">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <label for="">บ้านที่อาศัยเป็น</label>
                        <select class="custom-select" name='home_accommodation' disabled="1">
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
                <div class=""><hr></div>    
                <div class="row">

                    <div class="col-lg-6 col-md-4 col-sm-12 pb-3">
                        <label for="">ที่อยู่ปัจจุบัน</label>
                        <input type="text" class="form-control" readonly="1" name='address' value="{{$data2->address}}">
                    </div>
                    {{-- end col --}}

                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">อำเภอ/เขต</label>
                        <input type="text" class="form-control" readonly="1" name='address_kat' value="{{$data2->address_kat}}">
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <label for="">จังหวัด</label>
                        <input type="text" class="form-control" readonly="1" name='address_country' value="{{$data2->address_country}}">
                    </div>

                </div>
                {{--end row --}}
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">ถนน</label>
                        <input type="text" class="form-control" readonly="1" name='address_street' value="{{$data2->address_street}}">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">ตำบล/แขวง</label>
                        <input type="text" class="form-control" readonly="1" name='address_drict' value="{{$data2->address_drict}}">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" readonly="1" name='address_zip' value="{{$data2->address_zip}}">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <label for="">บ้านที่อาศัยเป็น</label>
                        <select class="custom-select" name='address_accommodation' disabled="1">
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
                 @if ( $data->status ==2 )
                  <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-12">
                        <div class="alert alert-warning" role="alert">
                            <div class="row col-lg-12 col-md-6 col-sm-4">
                                <div class="custom-control custom-radio">
                                    <input id="checkaddress" name="checkaddress" type="radio" class="custom-control-input" required="" value="1" checked="1">
                                    <label class="custom-control-label" for="checkaddress">ผ่าน</label>
                                </div>
                                <div class="custom-control custom-radio" style="margin-left: 20px;">
                                    <input id="checkaddress2" name="checkaddress" type="radio" class="custom-control-input" required="" value="0">
                                    <label class="custom-control-label" for="checkaddress2">ไม่ผ่าน</label>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                                <label for="alertaddress">หมายเหตุ</label>
                               <textarea class="form-control" id="alertaddress" rows="3" name="alertaddress"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
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
                    <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                        <label for="">วัน/เดือน/ปีเกิด</label>
                        <input type="date" class="form-control" name='birdthday' readonly="1" value="{{$data2->birdthday}}"></div>

                        {{-- ปีนักกษัตร --}}
                        <div class="col-lg-2 col-md-4 col-sm-12 pb-3">
                            <label for="">ปีนักกษัตร</label>
                            <select class="custom-select" name='chainase' disabled="1">
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
                        </div>
                        {{-- end ปีนักกษัตร --}}


                        {{-- ราศี --}}
                        <div class="col-lg-2 col-md-4 col-sm-12 pb-3">
                            <label for="">ราศี</label>
                            <select class="custom-select" name='zodiac' disabled="1">
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
                        </div>
                        {{-- end ราศี --}}

                        {{-- อายุ --}}
                        <div class="col-lg-2 col-md-4 col-sm-12 pb-3">
                            <label for="">อายุ</label>
                            <input type="text" class="form-control" name='age' readonly="1" value="{{$data2->age}}">


                        </div>
                        {{-- end อายุ --}}


                        {{-- สัญชาติ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>สัญชาติ</label> -->
                            <div class="form-group row">
                               <!--  <label for="" class="col-sm-2 col-form-label">ปี</label> -->
                               <label style="margin-left: 10px;">สัญชาติ</label>
                                <div class=" col-md-12 col-sm-10">
                                    <input type="" class="form-control" name='nationality' readonly="1" value="{{$data2->nationality}}">
                                </div>
                            </div>
                        </div>
                        {{-- end สัญชาติ --}}


                    </div>
                    {{-- end  row --}}




                    <div class="row ">
                        {{-- row start --}}

                        {{-- เชื้อชาติ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">เชื้อชาติ</label>
                            <input type="text" class="form-control" name='origin' readonly="1" value="{{$data2->origin}}">
                        </div>
                        {{-- end เชื้อชาติ --}}

                        {{-- ศาสนา --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">ศาสนา</label>
                            <input type="text" class="form-control" readonly="1" name='religion' value="{{$data2->religion}}">
                        </div>
                        {{-- end ศาสนา --}}

                        {{-- น้ำหนัก --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">น้ำหนัก</label>
                            <input type="text" class="form-control" readonly="1" name='weight' value="{{$data2->weight}}">
                        </div>
                        {{-- end น้ำหนัก --}}

                        {{-- ส่วนสูง --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">ส่วนสูง</label>
                            <input type="text" class="form-control" readonly="1" name='hight' value="{{$data2->hight}}">
                        </div>
                        {{-- end ส่วนสูง --}}

                    </div>
                    {{-- end row --}}


                    {{-- row start --}}
                    <div class="row pb-3">
                        {{-- บัตรประชาชนเลขที่ --}}
                        <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                            <label for="">บัตรประชาชนเลขที่</label>
                            <input type="text" class="form-control" readonly="1" id="id_card" name='id_card' value="{{$data2->id_card}}">
                        </div>
                        {{-- end บัตรประชาชนเลขที่ --}}

                        {{-- สถานที่ออกบัตร --}}
                        <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                            <label for="">สถานที่ออกบัตร</label>
                            <input type="text" class="form-control" readonly="1" name='place' value="{{$data2->place}}">
                        </div>
                        {{-- end สถานที่ออกบัตร --}}

                        {{-- บัตรหมดอายุ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">บัตรหมดอายุ</label>
                            <input type="date" class="form-control" readonly="1" name='expired_card' value="{{$data2->expired_card}}">
                        </div>
                        {{-- end บัตรหมดอายุ --}}

                    </div>
                    {{-- end row --}}


                    {{-- start row --}}
                    <div class="row">
                        {{-- เลขที่พาสปอร์ต --}}
                        <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                            <label for="">เลขที่พาสปอร์ต</label>
                            <input type="text" class="form-control" readonly="1" name='passport_no' value="{{$data2->passport_no}}">
                        </div>
                        {{-- end เลขที่พาสปอร์ต --}}

                        {{-- บัตรหมดอายุ --}}
                        <div class="col-lg-3 col-md-4 col-sm-12 pb-3">
                            <label for="">บัตรหมดอายุ</label>
                            <input type="date" class="form-control" readonly="1" name='passport_exp' value="{{$data2->passport_exp}}"></div>
                            <div class="col-4"></div>
                            {{-- end บัตรหมดอายุ --}}

                        </div>
                        {{-- end row --}}


                        {{-- start row --}}
                        <div class="row">
                            {{-- บัตรผู้เสียภาษี --}}
                            <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                                <label for="">บัตรผู้เสียภาษีเลขที่</label>
                                <input type="text" class="form-control" readonly="1" name='tax_card' value="{{$data2->tax_card}}">
                            </div>
                            {{-- end บัตรผู้เสียภาษี --}}

                            {{-- บัตรประกันสังคม --}}
                            <div class="col-lg-5 col-md-4 col-sm-12 pb-3">
                                <label for="">บัตรประกันสังคมเลขที่</label>
                                <input type="text" class="form-control" readonly="1" name='security_card' value="{{$data2->security_card}}">
                            </div>
                            {{-- end บัตรประกันสังคม --}}
                            <div class="col-lg-2 col-md-4 col-sm-12"></div>

                        </div>
                        {{-- end row --}}

                        {{-- ภาวะทางทหาร --}}
                        <div class="pb-3">ภาวะทางทหาร</div>

                        {{-- start row --}}
                        <div class="row">




                            {{-- ได้รับการยกเว้น --}}
                            <div class="col-lg-3 col-md-12 col-sm-12 pb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="soldier" id="gridRadios1" value="ได้รับการยกเว้น"  @if($data2->soldier == "ได้รับการยกเว้น"){{"checked"}}@endif>
                                    <label class="form-check-label" for="gridRadios1">
                                        ได้รับการยกเว้น
                                    </label>
                                </div>
                            </div>
                            {{-- --}}

                            {{-- ปลดเป็นทหารกองหนุน --}}
                            <div class="col-lg-3 col-md-12 col-sm-12 pb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="soldier" id="gridRadios2" value="ปลดเป็นทหารกองหนุน"  @if($data2->soldier == "ปลดเป็นทหารกองหนุน"){{"checked"}}@endif>
                                    <label class="form-check-label" for="gridRadios2">
                                        ปลดเป็นทหารกองหนุน
                                    </label>
                                </div>
                            </div>
                            {{-- --}}

                            {{-- ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี --}}
                            <div class="col-lg-3 col-md-5 col-sm-12 pb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="soldier" id="gridRadios3" value="ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี"  @if($data2->soldier == "ยังไม่ได้รับการเกณฑ์"){{"checked"}}@endif>
                                    <label class="form-check-label" for="gridRadios3">
                                        ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี
                                    </label>
                                </div>
                            </div>
                            {{-- --}}



                            {{-- พ.ศ. ที่จะเกณฑ์ --}}
                            <div class="col-lg-3 col-md-4 col-sm-12">

                                <input type="date" class="form-control" name='soldier_year' placeholder="พ.ศ." value="{{$data2->soldier_year}}" readonly="1">
                            </div>


                        </div>
                        {{-- end row --}}
                         @if ( $data->status ==2 )
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-lg-12">
                                <div class="alert alert-warning" role="alert">
                                    <div class="row col-lg-12 col-md-6 col-sm-4">
                                        <div class="custom-control custom-radio">
                                            <input id="checkproname" name="checkproname" type="radio" class="custom-control-input" required="" value="1" checked="1">
                                            <label class="custom-control-label" for="checkproname">ผ่าน</label>
                                        </div>
                                        <div class="custom-control custom-radio" style="margin-left: 20px;">
                                            <input id="checkproname2" name="checkproname" type="radio" class="custom-control-input" required="" value="0">
                                            <label class="custom-control-label" for="checkproname2">ไม่ผ่าน</label>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                                        <label for="alertproname">หมายเหตุ</label>
                                        <textarea class="form-control" id="alertproname" rows="3" name="alertproname"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif


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
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
                                <label for="">สถานภาพ</label>
                                <select class="custom-select" name='status' disabled="1">

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
                                <select class="custom-select" name='marry' disabled="1">
                                    <option value="จดทะเบียน"  @if($data2->marry == "จดทะเบียน"){{"selected"}}@endif>จดทะเบียน</option>
                                    <option value="ไม่ได้จดทะเบียน"  @if($data2->marry == "ไม่ได้จดทะเบียน"){{"selected"}}@endif>ไม่ได้จดทะเบียน</option>

                                </select>

                            </div>
                            {{-- end กรณีแต่งงาน --}}
                        </div>
                        {{-- end row --}}


                        {{-- start row --}}
                        <div class="row ">

                            {{-- บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                                <label for="">ชื่อภรรยา/สามี</label>
                                <input type="text" class="form-control" name='contact_person' value="{{$data2->contact_person}}" readonly="1">
                            </div>
                            {{-- end บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}

                            {{-- ชื่อสถานที่ทำงาน --}}
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3"> 
                                <label for="">ชื่อ/สถานที่ทำงาน</label>
                                <input type="text" class="form-control" name='workplace_name' value="{{$data2->workplace_name}}" readonly="1">
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
                                    <input type="text" class="form-control" name='position_work' value="{{$data2->position_work}}" readonly="1"></div>

                                    <div class="col-6"> </div>
                                </div>
                                {{-- end ตำแหน่งงาน --}}

                            </div>
                            {{--end start --}}

                            {{-- row start --}}

                            <div class="row ">
                                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                                    <label>มีบุตร</label>
                                    <input type="text" class="form-control" name='son_max' value="{{$data2->son_max}}" readonly="1">  
                                </div>
                                <!-- <div class=" col-lg-1 col-1" style="margin-top: 40px;">
                                    <span>คน</span> 
                                </div> -->

                                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                                    <label>จำนวนบุตรที่กำลังเข้าศึกษา</label>
                                    <input type="text" class="form-control" name='son_studying' value="{{$data2->son_studying}}" readonly="1">  
                                </div>
                                <!-- <div class="col-lg-1 col-2" style="margin-top: 40px;">
                                    <span>คน</span>  
                                </div> -->

                                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                                    <label>จำนวนบุตรที่ยังไม่ได้เข้าศึกษา</label>
                                    <input type="" class="form-control" name='son_not' width="50px" value="{{$data2->son_not}}" readonly="1">
                                </div>
                               <!--  <div class="col-lg-1 col-2" style="margin-top: 40px;">
                                    <span>คน</span>  
                                </div> -->
                            </div>

                            @if ( $data->status ==2 )
                            <div class="row" style="margin-top: 20px;">
                            <div class="col-lg-12">
                                <div class="alert alert-warning" role="alert">
                                    <div class="row col-lg-12 col-md-6 col-sm-4">
                                        <div class="custom-control custom-radio">
                                            <input id="checkfamily" name="checkfamily" type="radio" class="custom-control-input" required="" value="1" checked="1">
                                            <label class="custom-control-label" for="checkfamily">ผ่าน</label>
                                        </div>
                                        <div class="custom-control custom-radio" style="margin-left: 20px;">
                                            <input id="checkfamily2" name="checkfamily" type="radio" class="custom-control-input" required="" value="0">
                                            <label class="custom-control-label" for="checkfamily2">ไม่ผ่าน</label>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                                        <label for="alertfamily">หมายเหตุ</label>
                                        <textarea class="form-control" id="alertfamily" rows="3" name="alertfamily"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif




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
                                    <input type="" class="form-control" name='school_name' width="70%" value="{{$data2->school_name}}" readonly="1">

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
                                    <input type="" class="form-control" name='school_subject' width="50px" value="{{$data2->school_subject}}" readonly="1">

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
                                    <input type="date" class="form-control" name='school_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->school_start}}" readonly="1">

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
                                    <input type="date" class="form-control" name='school_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->school_stop}}" readonly="1">
                                </div>
                            </div>
                        </div>
                        {{-- end จบการศึกษา --}}


                        {{-- เกรดเฉลี่ย --}}
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='school_gpa' width="50px" value="{{$data2->school_gpa}}" readonly="1">
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
                                    <input type="" class="form-control" name='vocational_name' width="70%" value="{{$data2->vocational_name}}" readonly="1">

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
                                    <input type="" class="form-control" name='vocational_subject' width="50px" value="{{$data2->vocational_subject}}" readonly="1">

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
                                    <input type="date" class="form-control" name='vocational_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->vocational_start}}" readonly="1">

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
                                    <input type="date" class="form-control" name='vocational_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->vocational_stop}}" readonly="1">

                                </div>
                            </div>
                        </div>
                        {{-- end ถึง --}}
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{-- เกรดเฉลี่ย --}}
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='vocational_gpa' width="50px" value="{{$data2->vocational_gpa}}" readonly="1">

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
                                    <input type="" class="form-control" name='bachelor_name' width="70%" value="{{$data2->bachelor_name}}" readonly="1">

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
                                    <input type="" class="form-control" name='bachelor_subject' width="50px" value="{{$data2->bachelor_subject}}" readonly="1">

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
                                    <input type="date" class="form-control" name='bachelor_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->bachelor_start}}" readonly="1">

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
                                    <input type="date" class="form-control" name='bachelor_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->bachelor_stop}}" readonly="1">

                                </div>
                            </div>
                            {{-- end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{--เกรดเฉลี่ย --}}
                            <div class="form-group row">
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='bachelor_gpa' width="50px" value="{{$data2->bachelor_stop}}" readonly="1">

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
                                    <input type="" class="form-control" name='diploma_name' width="70%" value="{{$data2->diploma_name}}" readonly="1">

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
                                    <input type="" class="form-control" name='diploma_subject' width="50px" value="{{$data2->diploma_subject}}" readonly="1">
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
                                    <input type="date" class="form-control" name='diploma_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->diploma_start}}" readonly="1">

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
                                    <input type="date" class="form-control" name='diploma_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->diploma_stop}}" readonly="1">

                                </div>
                            </div>
                            {{--end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <label>เกรดเฉลี่ย</label>
                            {{-- เกรดเฉลี่ย --}}
                            <div class="form-group row">
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='diploma_gpa' width="50px" value="{{$data2->diploma_gpa}}" readonly="1">

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
                                    <input type="" class="form-control" name='postgraduate_name' width="70%" value="{{$data2->postgraduate_name}}" readonly="1">

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
                                    <input type="" class="form-control" name='postgraduate_subject' width="50px" value="{{$data2->postgraduate_subject}}" readonly="1">

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
                                    <input type="date" class="form-control" name='postgraduate_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->postgraduate_start}}" readonly="1">

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
                                    <input type="date" class="form-control" name='postgraduate_stop' width="50px" placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->postgraduate_stop}}" readonly="1">

                                </div>
                            </div>
                            {{-- end ถึง --}}
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            {{-- เกรดเฉลี่ย --}}
                            <label>เกรดเฉลี่ย</label>
                            <div class="form-group row">

                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="" class="form-control" name='postgraduate_gpa' width="50px" value="{{$data2->postgraduate_gpa}}" readonly="1">

                                </div>
                            </div>
                            {{-- end เกรดเฉลี่ย --}}
                        </div>
                    </div>
                    @if ( $data->status ==2 )
                    <div class="row" style="margin-top: 20px;">
                            <div class="col-lg-12">
                                <div class="alert alert-warning" role="alert">
                                    <div class="row col-lg-12 col-md-6 col-sm-4">
                                        <div class="custom-control custom-radio">
                                            <input id="checkeducation" name="checkeducation" type="radio" class="custom-control-input" required="" value="1" checked="1">
                                            <label class="custom-control-label" for="checkeducation">ผ่าน</label>
                                        </div>
                                        <div class="custom-control custom-radio" style="margin-left: 20px;">
                                            <input id="checkeducation2" name="checkeducation" type="radio" class="custom-control-input" required="" value="0">
                                            <label class="custom-control-label" for="checkeducation2">ไม่ผ่าน</label>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                                        <label for="alerteducation">หมายเหตุ</label>
                                        <textarea class="form-control" id="alerteducation" rows="3" name="alerteducation"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
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
                        <h4>ที่ทำงานปัจจุบัน</h4>
                    </div>

                    {{--end ที่ทำงานปัจจุบัน --}}



                    <br>
                    {{--สถานที่ทำงาน --}}
                    <div class="row">
                        {{-- สถานที่ทำงาน--}}
                        <div class="col-lg-6 col-md-12 col-sm-12 pb-3">
                            <label for="">สถานที่ทำงาน (ชื่อสถานที่)</label>
                            <input type="text" class="form-control" name='workplace' value="{{$data2->workplace}}" readonly="1">
                        </div>
                        {{--end สถานที่ทำงาน--}}

                        {{--ตำแห่นง --}}
                        <div class="col-lg-6 col-md-12 col-sm-12 pb-3">
                            <label for="">ตำแหน่ง</label>
                            <input type="text" class="form-control" name='position_workplace' value="{{$data2->position_workplace}}" readonly="1">
                        </div>
                        {{-- end ตำแห่นง  --}}

                    </div>
                    {{-- end row --}}
                    <br>
                    <div class="row">

                        {{--ลักษณะงานและความรับผิดชอบโดยสังเขป --}}
                        <div class="col-lg-8 col-md-12 col-sm-12 pb-3">
                            <label for="">ลักษณะงานและความรับผิดชอบโดยสังเขป</label>
                            <input type="text" class="form-control" name='work_other' value="{{$data2->work_other}}" readonly="1">
                        </div>
                        {{--end ลักษณะงานและความรับผิดชอบโดยสังเขป --}}

                        {{--ค่าจ้าง --}}
                        <div class="col-lg-4 col-md-12 col-sm-12 pb-3">
                            <label for="">ค่าจ้าง</label>
                            <input type="text" class="form-control" name='work_saraly' value="{{$data2->work_saraly}}" readonly="1">
                        </div>
                        {{-- end ค่าจ้าง--}}
                    </div>
                    {{--end row --}}
                    <br>

                    <div class="row">

                        <br>


                        {{--ระยะเวลา จาก --}}
                        <div class="col-lg-6 col-md-12 col-sm-12 pb-3">
                            <div class="form-group row">
                                <label for="" class="col-lg-3 col-md-12 col-sm-12 col-form-label">ระยะเวลา จาก</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='work_start' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->work_start}}" readonly="1">
                                </div>
                            </div>
                        </div>
                        {{--ระยะเวลา จาก --}}


                        <div class="col-lg-6 col-md-12 col-sm-12 pb-3">
                            {{-- ถึง --}}
                            <div class="form-group row">
                                <label for="" class="col-lg-2 col-md-12 col-sm-12 col-form-label">ถึง</label>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <input type="date" class="form-control" name='work_stop' placeholder="วัน/เดือน/ปี พ.ศ" value="{{$data2->work_stop}}" readonly="1">
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
                        <textarea class="form-control" name='because_out' id="exampleFormControlTextarea1" rows="3" readonly="1">{{$data2->because_out}}</textarea>
                    </div>
                    {{-- end เหตุผลที่ออก--}}
                     @if ( $data->status ==2 )
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-warning" role="alert">
                            <div class="row col-lg-12 col-md-6 col-sm-4">
                                <div class="custom-control custom-radio">
                                    <input id="checkwork" name="checkwork" type="radio" class="custom-control-input" required="" value="1" checked="1">
                                    <label class="custom-control-label" for="checkwork">ผ่าน</label>
                                </div>
                                <div class="custom-control custom-radio" style="margin-left: 20px;">
                                    <input id="checkwork2" name="checkwork" type="radio" class="custom-control-input" required="" value="0">
                                    <label class="custom-control-label" for="checkwork2">ไม่ผ่าน</label>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                                <label for="alertwork">หมายเหตุ</label>
                               <textarea class="form-control" id="alertwork" rows="3" name="alertwork"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
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
                        <div class="col-lg-3 col-md-9 col-sm-12">
                            <button type="button" class="btn btn-secondary" style="width: 50%">ภาษาไทย</button>
                        </div>
                        {{-- end ภาษาไทย--}}

                        {{-- พูด(ภาษาไทย)--}}
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">พูด</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <select class="custom-select" name='speak_th' disabled="1">
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
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="form-group row">
                                <label style="margin-left: 20px;" for="">อ่าน</label>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <select class="custom-select" name='read_th' disabled="1">
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
                       <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="form-group row">
                            <label style="margin-left: 20px;" for="">เขียน</label>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <select class="custom-select" name='write_th' disabled="1">
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
                <div class="col-lg-3 col-md-9 col-sm-12">
                    <button type="button" class="btn btn-secondary" style="width: 50%">ภาษาอังกฤษ</button>
                </div>
                {{-- พูด(ภาษาอังกฤษ) --}}
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="form-group row">
                        <label style="margin-left: 20px;" for="">พูด</label>
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <select class="custom-select" name='speak_en' disabled="1">
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
               <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="form-group row">
                    <label style="margin-left: 20px;" for="">อ่าน</label>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <select class="custom-select" name='read_en' disabled="1">
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
           <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="form-group row">
                <label style="margin-left: 20px;" for="">เขียน</label>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <select class="custom-select" name='write_en' disabled="1">
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
    <div class="col-lg-3 col-md-9 col-sm-12">
        <button type="button" class="btn btn-secondary" style="width: 50%">ภาษาจีน</button>
    </div>

    {{-- พูด(ภาษาจีน) --}}
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <select class="custom-select" name='speak_prc' disabled="1">
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
   <div class="col-lg-3 col-md-4 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">อ่าน</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <select class="custom-select" name='read_prc' disabled="1">
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
<div class="col-lg-3 col-md-4 col-sm-12">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">เขียน</label>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <select class="custom-select" name='write_prc' disabled="1">
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
                <input type="text" class="form-control col-sm-10" name='languages_ot[]' placeholder="ภาษาอื่นๆ" value="{{$lng[0]}}" readonly="1">
            </div>
        </div>
    </div>

    {{-- พูด(ภาษาอื่นๆ) --}}
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <select class="form-control " name='languages_ot[]' disabled="1">
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
        <div class="col-lg-8 col-md-8 col-sm-12">
            <select class="form-control " name='languages_ot[]' disabled="1">
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
        <div class="col-lg-8 col-md-8 col-sm-12">
            <select class="form-control " name='languages_ot[]' disabled="1">
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
    <div class="col-lg-3 col-md-3 col-sm-10">
        <div class="form-group row">

            <div class="col-sm-10">
                <input type="text" class="form-control col-sm-10" name='languages_v1[]' placeholder="ภาษาอื่นๆ" value="{{$lng1[0]}}" readonly="1">
            </div>
        </div>
    </div>

    {{-- พูด(ภาษาอื่นๆ) --}}
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <select class="form-control " name='languages_v1[]' disabled="1">
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
            <select class="form-control " name='languages_v1[]' disabled="1">
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
<div class="col-lg-3 col-md-3 col-sm-10">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">เขียน</label>
        <div class="col-lg-8 col-md-8 col-sm-10">
            <select class="form-control " name='languages_v1[]' disabled="1">
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
    <div class="col-lg-3 col-md-3 col-sm-10">
        <div class="form-group row">

            <div class="col-sm-10">
                <input type="text" class="form-control col-sm-10"  name='languages_v2[]'  placeholder="ภาษาอื่นๆ" value="{{$lng2[0]}}" readonly="1">
            </div>
        </div>
    </div>

    {{-- พูด(ภาษาอื่นๆ) --}}
    <div class="col-lg-3 col-md-3 col-sm-10">
        <div class="form-group row">
            <label style="margin-left: 20px;" for="">พูด</label>
            <div class="col-lg-8 col-md-8 col-sm-10">
                <select class="form-control " name='languages_v2[]' disabled="1" >
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
   <div class="col-lg-3 col-md-3 col-sm-10">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">อ่าน</label>
        <div class="col-lg-8 col-md-8 col-sm-10">
            <select class="form-control " name='languages_v2[]' disabled="1" >
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
<div class="col-lg-3 col-md-3 col-sm-10">
    <div class="form-group row">
        <label style="margin-left: 20px;" for="">เขียน</label>
        <div class="col-lg-8 col-md-8 col-sm-10">
            <select class="form-control " name='languages_v2[]' disabled="1" >
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
 @if ( $data->status ==2 )
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-warning" role="alert">
            <div class="row col-lg-12 col-md-6 col-sm-4">
                <div class="custom-control custom-radio">
                    <input id="checklang" name="checklang" type="radio" class="custom-control-input" required="" value="1" checked="1">
                    <label class="custom-control-label" for="checklang">ผ่าน</label>
                </div>
                <div class="custom-control custom-radio" style="margin-left: 20px;">
                    <input id="checklang2" name="checklang" type="radio" class="custom-control-input" required="" value="0">
                    <label class="custom-control-label" for="checklang2">ไม่ผ่าน</label>
                </div>
            </div>
            <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                <label for="alertlang">หมายเหตุ</label>
                <textarea class="form-control" id="alertlang" rows="3" name="alertlang"></textarea>
            </div>
        </div>
    </div>
</div>
@endif

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
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">กรณีฉุกเฉินที่ติดต่อได้</label>
                <input type="text" class="form-control" name='contact_family' value="{{$data2->contact_family}}" readonly="1">
            </div>
            {{-- end กรณีฉุกเฉินที่ติดต่อได้ --}}

            {{-- เกี่ยวข้องกับผู้สมัคร --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">เกี่ยวข้องกับผู้สมัคร</label>
                <input type="text" class="form-control" name='associated' value="{{$data2->associated}}" readonly="1">
            </div>
            {{-- end เกี่ยวข้องกับผู้สมัคร --}}

        </div>
        {{--end row --}}
        <br>

        <div class="row">
            {{--ที่อยู่ --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">ที่อยู่</label>
                <input type="text" class="form-control" name='address_family'  value="{{$data2->address_family}}" readonly="1">
            </div>
            {{--end ที่อยู่ --}}

            {{--โทร --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">

                <label for="">โทร</label>
                <input type="text" class="form-control" name='phone_family' value="{{$data2->phone_family}}" readonly="1">
            </div>
            {{--end โทร --}}


        </div>
        {{-- end row --}}
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 pb-3">
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
            <div class="col-lg-6 col-md-6 col-sm-6 pb-3">
                <label for="">ถ้ามีกรุณากรอก</label>
                <input type="text" width="50%" class="form-control" readonly="1" name='identify' value="{{$data2->identify}}">
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
                <input type="text" class="form-control" name='warranty_job' value="{{$data2->warranty_job}}" readonly="1">
            </div>
            {{--end ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน--}}

            {{--ตำแหน่ง --}}
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <label for="">ตำแหน่ง</label>
                <input type="text" class="form-control" name='position_job' value="{{$data2->position_job}}" readonly="1">
            </div>
            {{--end ตำแหน่ง --}}
        </div>
        {{--end row --}}
        <br>
        <div class="row">
            {{-- สถานที่ทำงาน --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">สถานที่ทำงาน</label>
                <input type="text" class="form-control" name='office' value="{{$data2->office}}" readonly="1">
            </div>
            {{-- end สถานที่ทำงาน --}}

            {{-- เบอร์โทร--}}
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <label for="">เบอร์โทร</label>
                <input type="text" class="form-control" name='phone_job' value="{{$data2->phone_job}}" readonly="1">
            </div>
            {{--end เบอร์โทร--}}
        </div>
        {{-- end row --}}
        <br>

        <div class="row">
            {{--เกี่ยวข้องกับผู้สมัครเป็น --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                <label for="">เกี่ยวข้องกับผู้สมัครเป็น</label>
                <input type="text" class="form-control" name='about' value="{{$data2->about}}" readonly="1">
            </div>
            {{--end เกี่ยวข้องกับผู้สมัครเป็น --}}
            <div class="col-lg-6 col-md-6 col-sm-12">

            </div>
        </div>
        {{--end row --}}
        <br>
 @if ( $data->status ==2 )
        <div class="row">
    <div class="col-lg-12">
        <div class="alert alert-warning" role="alert">
            <div class="row col-lg-12 col-md-6 col-sm-4">
                <div class="custom-control custom-radio">
                    <input id="checkpic" name="checkpic" type="radio" class="custom-control-input" required="" value="1" checked="1">
                    <label class="custom-control-label" for="checkpic">ผ่าน</label>
                </div>
                <div class="custom-control custom-radio" style="margin-left: 20px;">
                    <input id="checkpic2" name="checkpic" type="radio" class="custom-control-input" required="" value="0">
                    <label class="custom-control-label" for="checkpic2">ไม่ผ่าน</label>
                </div>
            </div>
            <div class="row" style="margin-left: 2px; margin-right: 2px; margin-top: 10px;">
                <label for="alertpic">หมายเหตุ</label>
                <textarea class="form-control" id="alertpic" rows="3" name="alertpic"></textarea>
            </div>
        </div>
    </div>
</div>
@endif

        <!-- {{-- photo_card --}}
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
        {{-- end photo_tl --}} -->
        <br><!-- <br><br> -->
        @if ( $data->status ==2 )
        
            <button type="submit" value="บันทึก" class="btn btn-primary ">บันทึกข้อมูล</button>
        
        
        @endif
         </form>
    {{-- end: form --}}

        

                    <!-- <br><br>
                    --><!-- @if ( $data->status==2 ) -->
<!-- 
                    <form class="alert alert-warning" action="{{ asset( '/guides/'.$data->id ) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="PUT" name="_method" autocomplete="off" />
                        <input type="hidden" value="{{ $data->id }}" name="id" autocomplete="off" />
                        <input type="hidden" name="role_id" value="4">


                        <h4 class="mb-3">ผลการตรวจสอบ</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="status" type="radio" class="custom-control-input" value="2" checked="" required="">
                                <label class="custom-control-label" for="credit">ไม่ผ่านการตรวจสอบ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="status" type="radio" class="custom-control-input" value="1" required="">
                                <label class="custom-control-label" for="debit">ผ่านการตรวจสอบ</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>หมายเหตุ</label>
                            <textarea class="form-control" name="remake"></textarea>
                        </div>

                        <hr class="mb-4">
                        <div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">บันทึกข้อมูล</button>
                        </div>
                    </form> -->
                    <!-- @endif -->

                </div>

            </div>
            {{-- end card --}}

       
</div>
<!-- ตรวจสอบ -->

    <div class="tab-pane fade" id="nav-personalid" role="tabpanel" aria-labelledby="nav-personalid-tab">
        <br>
        <div class="container-fluid" style="">
            <!-- <embed src="{{$data2->photo_card}}"> -->
                <embed src="{{$data2->photo_card}}" class="img-fluid" alt="Responsive image">
        </div> 
        <br>   
    </div>
    <div class="tab-pane fade" id="nav-homeid" role="tabpanel" aria-labelledby="nav-homeid-tab">
        <br>
        <div class="container">
            <!-- <embed src="{{$data2->photo_address}}"> -->
                <embed src="{{$data2->photo_address}}" class="img-fluid" alt="Responsive image">
        </div>  
        <br> 
    </div>
    <div class="tab-pane fade" id="nav-guidecard" role="tabpanel" aria-labelledby="nav-guidecard-tab">
        <br>
        <div class="container">
           <!-- <embed src="{{$data2->photo_guide}}">  -->
            <embed src="{{$data2->photo_guide}}" class="img-fluid" alt="Responsive image">
        </div>
        <br>
    </div>
    <div class="tab-pane fade" id="nav-tlcard" role="tabpanel" aria-labelledby="nav-tlcard-tab">
        <br>
        <div class="container">
            <!-- <embed src="{{$data2->photo_tl}}"> -->
                <embed src="{{$data2->photo_tl}}" class="img-fluid" alt="Responsive image">
        </div>
        <br>
    </div>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="/js/form-validation.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
</body>

</html>