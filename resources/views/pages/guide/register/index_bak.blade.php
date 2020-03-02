<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>ลงทะเบียนไกด์/TL</title>
</head>
<script language="JavaScript">
    function check_number(ch) {
        var len, digit;
        if (ch == " ") {
            return false;
            len = 0;
        } else {
            len = ch.length;
        }
        for (var i = 0; i < len; i++) {
            digit = ch.charAt(i)
            if (digit >= "0" && digit <= "9") {
                ;
            } else {
                return false;
            }
        }
        return true;
    }


    function checkvalue() {
        if (!check_number(document.fNumber.v.value) || document.fNumber.v.value == "") {
            alert('กรุณากรอกเป็นตัวเลข');
            return false;
        } else {
            return true;
        }
    }
</script>


<style>
    body {
        background-color: #fbfbfb;
    }

    body {
        font-family: 'Kanit', sans-serif;
    }
</style>

<body>

    <div class="container my-5 ">

        <div class="card">

            <div class="card-body">


                {{-- header --}}
                <div class="text-center py-5">
                    <img class="d-block mx-auto mb-4" src="{{ asset('images/logos/pro-logo-117x32.png') }}" alt="">
                    <h2>ลงทะเบียนไกด์/TL</h2>
                    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                </div>
                {{-- end: header --}}

                <form method="POST" action="{{action('RegisterController@store')}}" name="mt5 fNumber" enctype="multipart/form-data" onSubmit="return checkvalue()" data-plugin="clone">
                    @csrf

                    {{-- ประวัติส่วนตัว --}}
                    <div class="mb-4">
                        <h4 class="mb-3 pb-2 border-bottom">ประวัติส่วนตัว</h4>

                        {{-- profile --}}
                        <div class="mb-3">
                            <label for="profile">รูป*</label>
                            <div><input type="file" id="profile" name="profile" placeholder="" value="" required=""></div>
                        </div>
                        {{-- end profile --}}

                        <div class="row">
                            {{-- ชื่อ --}}
                            <div class="col-3 mb-3">
                                <label for="first_name">ขื่อ*</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="" required="">
                            </div>
                            {{-- end ชื่อ --}}

                            {{-- นามสกุล --}}
                            <div class="col-3 mb-3">
                                <label for="last_name">นามสกุล*</label>
                                <input type="text" class="form-control" id="last_name" name='last_name'>
                            </div>
                            {{-- end นามสกุล --}}

                            {{-- ชื่อ(ภาษาอังกฤษ) --}}
                            <div class="col-3 mb-3">
                                <label for="name_eng">ชื่อ(ภาษาอังกฤษ)</label>
                                <input type="text" class="form-control" name='name_eng'>
                            </div>
                            {{-- end ชื่อ(ภาษาอังกฤษ) --}}

                            {{--นามสกุล(ภาษาอังกฤษ)--}}
                            <div class="col-3 mb-3">
                                <label for="sername_eng">นามสกุล(ภาษาอังกฤษ)</label>
                                <input type="text" class="form-control" name='sername_eng'>
                            </div>
                            {{-- นามสกุล(ภาษาอังกฤษ) --}}
                        </div>
                        <div class="row">

                            {{-- ชื่อเล่น --}}
                            <div class="col-3">
                                <label for="nickname">ชื่อเล่น</label>
                                <input type="text" class="form-control" name='nickname'>
                            </div>
                            {{-- end ชื่อเล่น --}}

                            {{-- เพศ --}}
                            <div class="col-3">
                                <label for="">เพศ</label>
                                <select class="form-control" name='sex' id="#">
                                    <option value="0">กรุณาเลือก</option>
                                    <option value="1">ชาย</option>
                                    <option value="2">หญิง</option>

                                </select>
                            </div>
                            {{-- end เพศ --}}

                            {{-- email --}}
                            <div class="col-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            {{-- end email --}}

                        </div>
                        <br>
                        {{-- phone --}}
                        <div class="row">
                            <div class="col-3">
                                <label for="phone">โทรศัพท์</label>
                                <input type="text" class="form-control" id="v" name='phone'>
                            </div>
                            {{-- end phone --}}

                            {{-- line id --}}
                            <div class="col-3">
                                <label for="">Line ID</label>
                                <input type="text" class="form-control" name='line_id'>
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
                    <div class="col-5">
                        <label for="">ที่อยู่ตามทะเบียนบ้าน</label>
                        <input type="text" class="form-control" name='home'>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="">อำเภอ/เขต</label>
                                <input type="text" class="form-control" name='home_kat'>
                            </div>
                            <div class="col-6">
                                <label for="">จังหวัด</label>
                                <input type="text" class="form-control" name='home_country'>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="">ถนน</label>
                                <input type="text" class="form-control" name='home_street'></div>
                            <div class="col-6">
                                <label for="">ตำบล/แขวง</label>
                                <input type="text" class="form-control" name='home_dtrict'></div>


                        </div>
                        {{-- end row --}}

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="" name='home_zip'>
                            </div>
                            <div class="col-6">
                                <label for="">บ้านที่อาศัยเป็น</label>
                                <select class="form-control" name='home_accommodation' id="#">
                                    <!-- <option value="0">กรุณาเลือก</option> -->
                                    <option value="1">อาศัยกับครอบครัว</option>
                                    <option value="2">บ้านตัวเอง</option>
                                    <option value="3">บ้านเช่า</option>
                                    <option value="4">หอพัก</option>
                                    <option value="5">อื่นๆ</option>

                                </select>

                            </div>


                        </div>
                        {{-- end row --}}




                    </div>
                    {{-- end col-5 --}}
                    <br>

                    {{-- กั้นหน้า --}}
                    <div class="col-2"></div>
                    {{-- กั้นหน้า --}}


                    {{-- ที่อยู่ปัจจุบัน --}}
                    <div class="col-5">

                        <label for="">ที่อยู่ปัจจุบัน</label>
                        <input type="text" class="form-control" name='address'>
                        <br>
                        <div class="row">


                            {{-- อำเภอ/เขต --}}
                            <div class="col-6">
                                <label for="">อำเภอ/เขต</label>
                                <input type="text" class="form-control" name='address_kat'>
                            </div>
                            {{-- end อำเภอ/เขต --}}



                            {{-- จังหวัด --}}
                            <div class="col-6">
                                <label for="">จังหวัด</label>
                                <input type="text" class="form-control" name='address_country'>
                            </div>
                            {{-- จังหวัด --}}
                        </div>
                        <br>
                        <div class="row">
                            {{-- ถนน --}}
                            <div class="col-6">
                                <label for="">ถนน</label>
                                <input type="text" class="form-control" name='address_street'>
                            </div>
                            {{-- end ถนน --}}

                            {{-- ตำบล/แขวง --}}
                            <div class="col-6">
                                <label for="">ตำบล/แขวง</label>
                                <input type="text" class="form-control" name='address_drict'>
                            </div>
                            {{-- ตำบล/แขวง --}}
                        </div>
                        <br>
                        <div class="row">
                            {{-- รหัสไปรษณีย์ --}}
                            <div class="col-6">
                                <label for="">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="" name='address_zip'>
                            </div>
                            {{-- รหัสไปรษณีย์ --}}





                            {{-- บ้านที่พักอาศัย --}}
                            <div class="col-6">
                                <label for="">บ้านที่อาศัยเป็น</label>
                                <select class="form-control" name='address_accommodation' id="#">
                                    <!-- <option value="">กรุณาเลือก</option> -->
                                    <option value="1">อาศัยกับครอบครัว</option>
                                    <option value="2">บ้านตัวเอง</option>
                                    <option value="3">บ้านเช่า</option>
                                    <option value="4">หอพัก</option>
                                    <option value="5">อื่นๆ</option>
                                </select>

                            </div>
                            {{-- end บ้านที่พักอาศัย --}}

                        </div>


                    </div>
                    {{-- end ที่อยู่ปัจจุบัน --}}


                </div>
                {{-- end row --}}


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
                    <div class="col-2">
                        <label for="">วัน/เดือน/ปีเกิด</label>
                        <input type="text" class="form-control" name='birdthday'></div>

                    {{-- ปีนักกษัตร --}}
                    <div class="col-3">
                        <label for="">ปีนักกษัตร</label>
                        <select class="form-control" name='chainase' id="#">
                            <option value="">-</option>
                            <option value="1">ปีชวด, ปีหนู</option>
                            <option value="2">ปีฉลู, ปีวัว</option>
                            <option value="3">ปีขาล, ปีเสือ</option>
                            <option value="4">ปีเถาะ, ปีกระต่าย</option>
                            <option value="5">ปีมะโรง, ปีงูใหญ่</option>
                            <option value="6">ปีมะเส็ง, ปีงูเล็ก</option>
                            <option value="7">ปีมะเมีย, ปีม้า</option>
                            <option value="8">ปีมะแม, แพะ</option>
                            <option value="9">ปีวอก, ปีลิง</option>
                            <option value="10">ปีระกา, ปีไก่</option>
                            <option value="11">ปีจอ, ปีหมา</option>
                            <option value="12">ปีกุน, หมู </option>
                        </select>
                    </div>
                    {{-- end ปีนักกษัตร --}}


                    {{-- ราศี --}}
                    <div class="col-2">
                        <label for="">ราศี</label>
                        <select class="form-control" name='zodiac' id="#">
                            <option value="">-</option>
                            <option value="1">ราศีเมษ</option>
                            <option value="2">ราศีพฤษก</option>
                            <option value="3">ราศีเมถุน</option>
                            <option value="4">ราศีกรกฎ</option>
                            <option value="5">ราศีสิงห์</option>
                            <option value="6">ราศีกันย์</option>
                            <option value="7">ราศีตุลย์</option>
                            <option value="8">ราศีพิจิก</option>
                            <option value="9">ราศีธนู</option>
                            <option value="10">ราศีมังกร</option>
                            <option value="11">ราศีกุมภ์</option>
                            <option value="12">ราศีมีน</option>

                        </select>
                    </div>
                    {{-- end ราศี --}}

                    {{-- อายุ --}}
                    <div class="col-2">
                        <label for="">อายุ</label>
                        <input type="text" class="form-control" id="" name='age'>


                    </div>
                    {{-- end อายุ --}}


                    {{-- สัญชาติ --}}
                    <div class="col-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>สัญชาติ</label>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">ปี</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='nationality' id="">
                            </div>
                        </div>
                    </div>
                    {{-- end สัญชาติ --}}


                </div>
                {{-- end  row --}}




                <div class="row ">
                    {{-- row start --}}

                    {{-- เชื้อชาติ --}}
                    <div class="col-3 pb-3">
                        <label for="">เชื้อชาติ</label>
                        <input type="text" class="form-control" name='origin'>
                    </div>
                    {{-- end เชื้อชาติ --}}

                    {{-- ศาสนา --}}
                    <div class="col-3">
                        <label for="">ศาสนา</label>
                        <input type="text" class="form-control" name='religion'>
                    </div>
                    {{-- end ศาสนา --}}

                    {{-- น้ำหนัก --}}
                    <div class="col-3">
                        <label for="">น้ำหนัก</label>
                        <input type="text" class="form-control" id="" name='weight'>
                    </div>
                    {{-- end น้ำหนัก --}}

                    {{-- ส่วนสูง --}}
                    <div class="col-3">
                        <label for="">ส่วนสูง</label>
                        <input type="text" class="form-control" id="" name='hight'>
                    </div>
                    {{-- end ส่วนสูง --}}

                </div>
                {{-- end row --}}


                {{-- row start --}}
                <div class="row pb-3">
                    {{-- บัตรประชาชนเลขที่ --}}
                    <div class="col-5">
                        <label for="">บัตรประชาชนเลขที่</label>
                        <input type="text" class="form-control" id="" name='id_card'>
                    </div>
                    {{-- end บัตรประชาชนเลขที่ --}}

                    {{-- สถานที่ออกบัตร --}}
                    <div class="col-4">
                        <label for="">สถานที่ออกบัตร</label>
                        <input type="text" class="form-control" name='place'>
                    </div>
                    {{-- end สถานที่ออกบัตร --}}

                    {{-- บัตรหมดอายุ --}}
                    <div class="col-3">
                        <label for="">บัตรหมดอายุ</label>
                        <input type="text" class="form-control" name='expired_card'>
                    </div>
                    {{-- end บัตรหมดอายุ --}}

                </div>
                {{-- end row --}}


                {{-- start row --}}
                <div class="row pb-3">
                    {{-- เลขที่พาสปอร์ต --}}
                    <div class="col-5">
                        <label for="">เลขที่พาสปอร์ต</label>
                        <input type="text" class="form-control" name='passport'>
                    </div>
                    {{-- end เลขที่พาสปอร์ต --}}

                    {{-- บัตรหมดอายุ --}}
                    <div class="col-3">
                        <label for="">บัตรหมดอายุ</label>
                        <input type="text" class="form-control" name='expiry'></div>
                    <div class="col-4"></div>
                    {{-- end บัตรหมดอายุ --}}




                </div>
                {{-- end row --}}


                {{-- start row --}}
                <div class="row pb-4">
                    {{-- บัตรผู้เสียภาษี --}}
                    <div class="col-5">
                        <label for="">บัตรผู้เสียภาษีเลขที่</label>
                        <input type="text" class="form-control" name='tax_card'>
                    </div>
                    {{-- end บัตรผู้เสียภาษี --}}

                    {{-- บัตรประกันสังคม --}}
                    <div class="col-5">
                        <label for="">บัตรประกันสังคมเลขที่</label>
                        <input type="text" class="form-control" name='security_card'>
                    </div>
                    {{-- end บัตรประกันสังคม --}}
                    <div class="col-2"></div>

                </div>
                {{-- end row --}}




                {{-- start row --}}
                <div class="row">
                    {{-- ภาวะทางทหาร --}}
                    <div class="col-2">ภาวะทางทหาร</div>


                    {{-- ได้รับการยกเว้น --}}
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soldier" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                ได้รับการยกเว้น
                            </label>
                        </div>
                    </div>
                    {{-- --}}

                    {{-- ปลดเป็นทหารกองหนุน --}}
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soldier" id="gridRadios1" value="option2" checked>
                            <label class="form-check-label" for="gridRadios1">
                                ปลดเป็นทหารกองหนุน
                            </label>
                        </div>
                    </div>
                    {{-- --}}

                    {{-- ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี --}}
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soldier" id="gridRadios1" value="option3" checked>
                            <label class="form-check-label" for="gridRadios1">
                                ยังไม่ได้รับการเกณฑ์ จะเกณฑ์ในปี
                            </label>
                        </div>
                    </div>
                    {{-- --}}



                    {{-- พ.ศ. ที่จะเกณฑ์ --}}
                    <div class="col-2">

                        <input type="text" class="form-control" name='soldier_year' placeholder="พ.ศ.">
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
                    <div class="col-3">
                        <label for="">สถานภาพ</label>
                        <select class="form-control" name='status' id="#">

                            <option value="1">โสด</option>
                            <option value="2">แต่งงาน</option>
                            <option value="3">หม้าย</option>
                            <option value="4">แยกกัน/หย่า</option>

                        </select>
                    </div>
                    {{-- end สถานภาพ --}}

                    {{-- กรณีแต่งงาน --}}
                    <div class="col-3">
                        <label for="">กรณีแต่งงาน</label>
                        <select class="form-control" name='marry' id="#">
                            <option value="1">จดทะเบียน</option>
                            <option value="2">ไม่ได้จดทะเบียน</option>

                        </select>

                    </div>
                    {{-- end กรณีแต่งงาน --}}
                </div>
                {{-- end row --}}


                {{-- start row --}}
                <div class="row  pb-3">

                    {{-- บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}
                    <div class="col-6">
                        <label for="">ชื่อภรรยา/สามี</label>
                        <input type="text" class="form-control" name='contact_person'>
                    </div>
                    {{-- end บุคคลที่ติดต่อได้กรณีฉุกเฉิน --}}

                    {{-- ชื่อสถานที่ทำงาน --}}
                    <div class="col-6"> <label for="">ชื่อ/สถานที่ทำงาน</label>
                        <input type="text" class="form-control" name='workplace_name'>
                    </div>
                    {{-- end ชื่อสถานที่ทำงาน --}}


                </div>
                {{-- end row --}}



                {{-- start --}}
                <div class="row">
                    {{-- ตำแหน่งงาน --}}
                    <div class="col-6">
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

                    <div class="col-10">
                        <div class="row">
                            {{-- มีบุตร --}}
                            <div class="col-2">
                                <label for="">มีบุตร</label>
                                <div class="form-group row">

                                    <div class="col-sm-15">
                                        <input type="text" class="form-control" name='son_max' id="">
                                    </div>
                                </div>
                            </div>
                            {{-- end มีบุตร--}}
                            <div class="col-4">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="">จำนวนบุตรที่กำลังเข้าศึกษา</label>

                                {{-- จำนวนบุตรที่กำลังจะเข้าศึกษา --}}
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label">คน</label>
                                    <div class="col-sm-15">
                                        <input type="" class="form-control" name='son_studying' id="">
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
                                        <input type="" class="form-control" name='son_not' width="50px" id="">

                                    </div>
                                </div>
                            </div>
                            {{-- end จำนวนบุตรที่ยังไม่ได้เข้าศึกษา --}}

                            <div class="col-2">
                                <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <div class="form-group row">
                                    <label for="" class="col-sm-10 col-form-label">คน</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" name='#' width="50px" id="">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-2"></div>


                </div>
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
                    <div class="col-6">
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        <label>ชื่อสถาบันการศึกษา</label>
                        {{-- ชื่อสถาบันการศึกษา --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">มัธยมศึกษา</label>
                            <div class="col-sm-8">

                                <input type="" class="form-control" name='education' width="70%" id="">

                            </div>
                        </div>
                        {{-- end ชื่อสถาบันการศึกษา --}}
                    </div>
                    <div class="col-6">
                        <br>

                        {{-- สาขาวิชา --}}
                        <label>สาขาวิชา</label>
                        <div class="form-group row">

                            <div class="col-sm-8">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                    </div>
                    {{-- end สาขาวิชา --}}
                </div>
                {{-- end row --}}

                {{-- start row --}}
                <div class="row">
                    <div class="col-5">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <label>เริ่ม</label>
                        {{-- เริ่มการศึกษา --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label"></label>
                            <div class="col-sm-7">

                                <input type="" class="form-control" name='education' id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{-- end เริ่มการศึกษา --}}

                    </div>
                    {{-- จบการศึกษา --}}
                    <div class="col-4">

                        <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">ถึง</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                    </div>
                    {{-- end จบการศึกษา --}}


                    {{-- เกรดเฉลี่ย --}}
                    <div class="col-3">

                        <label>เกรดเฉลี่ย</label>
                        <div class="form-group row">

                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                    </div>
                    {{-- end เกรดเฉลี่ย --}}
                </div>
                {{-- end row --}}
                <hr>
                {{-- start row --}}
                <div class="row">
                    <div class="col-6">
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        <label>ชื่อสถาบันการศึกษา</label>
                        {{-- ชื่อสถาบันการศึกษา --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">ปวช.</label>
                            <div class="col-sm-8">

                                <input type="" class="form-control" name='education' width="70%" id="">

                            </div>
                        </div>
                        {{-- end ชื่อสถาบันการศึกษา --}}

                    </div>
                    {{-- สาขาวิชา --}}
                    <div class="col-6">
                        <br>
                        <label>สาขาวิชา</label>
                        <div class="form-group row">

                            <div class="col-sm-8">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                    </div>
                    {{-- end สาขาวิชา --}}
                </div>
                {{-- end row --}}

                <div class="row">
                    <div class="col-5">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <label>เริ่ม</label>
                        {{-- เริ่มการศึกษา --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label"></label>
                            <div class="col-sm-7">

                                <input type="" class="form-control" name='education' id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{-- end เริ่มการศึกษา --}}

                    </div>

                    {{-- ถึง --}}
                    <div class="col-4">

                        <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">ถึง</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                    </div>
                    {{-- end ถึง --}}
                    <div class="col-3">

                        <label>เกรดเฉลี่ย</label>
                        {{-- เกรดเฉลี่ย --}}
                        <div class="form-group row">

                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>

                    </div>
                    {{-- end เกรดเฉลี่ย --}}
                </div>
                {{-- end row --}}

                <hr>
                <div class="row">
                    <div class="col-6">
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        <label>ชื่อสถาบันการศึกษา</label>
                        {{-- ชื่อสถาบันการศึกษา --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">ปวท./ปวส.</label>
                            <div class="col-sm-8">

                                <input type="" class="form-control" name='education' width="70%" id="">

                            </div>
                        </div>
                        {{-- end ชื่อสถาบันการศึกษา --}}
                    </div>

                    {{-- สาขาวิชา --}}
                    <div class="col-6">
                        <br>
                        <label>สาขาวิชา</label>
                        <div class="form-group row">

                            <div class="col-sm-8">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                    </div>
                    {{-- end สาขาวิชา --}}
                </div>

                <div class="row">
                    <div class="col-5">
                        {{-- เริ่มการศึกษา  --}}
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <label>เริ่ม</label>
                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label"></label>
                            <div class="col-sm-7">

                                <input type="" class="form-control" name='education' id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{-- end เริ่มการศึกษา --}}

                    </div>
                    <div class="col-4">

                        <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        {{-- ถึง --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">ถึง</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{-- end ถึง --}}
                    </div>
                    <div class="col-3">

                        <label>เกรดเฉลี่ย</label>
                        {{--เกรดเฉลี่ย --}}
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                        {{-- end เกรดเฉลี่ย --}}
                    </div>
                    {{-- end col --}}
                </div>
                {{-- end row --}}
                <hr>

                <div class="row">
                    <div class="col-6">
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        <label>ชื่อสถาบันการศึกษา</label>
                        {{-- ชื่อสถาบันการศึกษา --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">ปริญญาตรี</label>
                            <div class="col-sm-8">

                                <input type="" class="form-control" name='education' width="70%" id="">

                            </div>
                        </div>
                        {{-- end ชื่อสถาบันการศึกษา --}}

                    </div>
                    <div class="col-6">
                        <br>
                        <label>สาขาวิชา</label>
                        {{-- สาขาวิชา --}}
                        <div class="form-group row">

                            <div class="col-sm-8">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                        {{-- end สาขาวิชา --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        {{-- เริ่มการศึกษา  --}}
                        <label>เริ่ม</label>
                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label"></label>
                            <div class="col-sm-7">

                                <input type="" class="form-control" name='education' id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{-- end เริ่มการศึกษา  --}}

                    </div>
                    <div class="col-4">

                        <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        {{-- ถึง --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">ถึง</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{--end ถึง --}}
                    </div>
                    <div class="col-3">

                        <label>เกรดเฉลี่ย</label>
                        {{-- เกรดเฉลี่ย --}}
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                        {{-- end เกรดเฉลี่ย --}}
                    </div>
                    {{-- end col --}}
                </div>
                {{-- end row --}}
                <hr>

                <div class="row">
                    <div class="col-6">
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                        <label>ชื่อสถาบันการศึกษา</label>
                        {{-- ชื่อสถาบันการศึกษา --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">สูงกว่าปริญญาตรี</label>
                            <div class="col-sm-8">

                                <input type="" class="form-control" name='education' width="70%" id="">

                            </div>
                        </div>
                        {{-- end ชื่อสถาบันการศึกษา --}}

                    </div>
                    <div class="col-6">
                        <br>
                        <label>สาขาวิชา</label>
                        {{-- สาขาวิชา --}}
                        <div class="form-group row">

                            <div class="col-sm-8">
                                <input type="" class="form-control" name='education' width="50px" id="">

                            </div>
                        </div>
                        {{-- end สาขาวิชา --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <label>เริ่ม</label>
                        {{-- เริ่มการศึกษา  --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label"></label>
                            <div class="col-sm-7">

                                <input type="" class="form-control" name='education' id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{-- end เริ่มการศึกษา  --}}

                    </div>
                    <div class="col-4">

                        <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        {{-- ถึง --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">ถึง</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="" placeholder="วัน/เดือน/ปี พ.ศ">

                            </div>
                        </div>
                        {{-- end ถึง --}}
                    </div>
                    <div class="col-3">
                        {{-- เกรดเฉลี่ย --}}
                        <label>เกรดเฉลี่ย</label>
                        <div class="form-group row">

                            <div class="col-sm-10">
                                <input type="" class="form-control" name='education' width="50px" id="">

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
                    {{-- สถานที่ทำงาน--}}
                    <div class="col-6">
                        <label for="">สถานที่ทำงาน (ชื่อสถานที่) 1</label>
                        <input type="text" class="form-control" name='detail'>
                    </div>
                    {{--end สถานที่ทำงาน--}}

                    {{--ตำแห่นง --}}
                    <div class="col-6">
                        <label for="">ตำแห่นง</label>
                        <input type="text" class="form-control" name='detail'>
                    </div>
                    {{-- end ตำแห่นง  --}}

                </div>
                {{-- end row --}}
                <br>
                <div class="row">

                    {{--ลักษณะงานและความรับผิดชอบโดยสังเขป --}}
                    <div class="col-8">
                        <label for="">ลักษณะงานและความรับผิดชอบโดยสังเขป</label>
                        <input type="text" class="form-control" name='detail'>
                    </div>
                    {{--end ลักษณะงานและความรับผิดชอบโดยสังเขป --}}

                    {{--ค่าจ้าง --}}
                    <div class="col-4">
                        <label for="">ค่าจ้าง</label>
                        <input type="text" class="form-control" name='detail'>
                    </div>
                    {{-- end ค่าจ้าง--}}
                </div>
                {{--end row --}}
                <br>

                <div class="row">

                    <br>


                    {{--ระยะเวลา จาก --}}
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">ระยะเวลา จาก</label>
                            <div class="col-sm-8">
                                <input type="" class="form-control" name='detail' id="" placeholder="วัน/เดือน/ปี พ.ศ">
                            </div>
                        </div>
                    </div>
                     {{--ระยะเวลา จาก --}}


                    <div class="col-6">
                        {{-- ถึง --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">ถึง</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" name='detail' id="" placeholder="วัน/เดือน/ปี พ.ศ">
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
                    <textarea class="form-control" name='detail' id="exampleFormControlTextarea1" rows="3"></textarea>
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
                    <div class="col-3">
                        <button type="button" class="btn btn-secondary">ภาษาไทย</button>
                    </div>
                    {{-- end ภาษาไทย--}}

                    {{--  พูด(ภาษาไทย)--}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">พูด</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>


                                </select>
                            </div>
                        </div>
                    </div>
                    {{--end  พูด(ภาษาไทย)--}}

                    {{-- อ่าน(ภาษาไทย)--}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">อ่าน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{--end  อ่าน(ภาษาไทย)--}}

                    {{-- เขียน(ภาษาไทย)--}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">เขียน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>

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
                    <div class="col-3">
                        <button type="button" class="btn btn-secondary">ภาษาอังกฤษ</button>
                    </div>
                    {{-- พูด(ภาษาอังกฤษ) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">พูด</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    {{--end พูด(ภาษาอังกฤษ) --}}

                    {{-- อ่าน(ภาษาอังกฤษ) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">อ่าน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{--end อ่าน(ภาษาอังกฤษ) --}}

                    {{-- เขียน (ภาษาอังกฤษ) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">เขียน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>

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
                    <div class="col-3">
                        <button type="button" class="btn btn-secondary">ภาษาจีน</button>
                    </div>

                    {{-- พูด(ภาษาจีน) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">พูด</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- end พูด(ภาษาจีน) --}}

                    {{-- อ่าน(ภาษาจีน) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">อ่าน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- end อ่าน(ภาษาจีน)  --}}
                    
                    {{--  เขียน(ภาษาจีน)  --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">เขียน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- end เขียน(ภาษาจีน)  --}}

                </div>
                {{-- end ภาษาจีน --}}
                <br>

                {{--อื่นๆ..กรุณาระบุ --}}
                <div class="row">
                    <div class="col-3">
                        <button type="button" class="btn btn-secondary">อื่นๆ..กรุณาระบุ</button>
                    </div>
                    {{--พูด (อื่นๆ..กรุณาระบุ) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">พูด</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- end พูด (อื่นๆ..กรุณาระบุ) --}}

                    {{-- อ่าน(อื่นๆ..กรุณาระบุ) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">อ่าน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- end อ่าน(อื่นๆ..กรุณาระบุ) --}}

                    {{-- เขียน(อื่นๆ..กรุณาระบุ) --}}
                    <div class="col-3">
                        <div class="form-group row">
                            <label for="">เขียน</label>
                            <div class="col-sm-8">
                                <select class="form-control" name='language' id="#">
                                    <option value="">-</option>
                                    <option value="1">ดี</option>
                                    <option value="2">ปานกลาง</option>
                                    <option value="3">พอใช้</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- เขียน(อื่นๆ..กรุณาระบุ) --}}
                </div>
                {{--end อื่นๆ..กรุณาระบุ --}}


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
                            <div class="col-6">
                                <label for="">กรณีฉุกเฉินที่ติดต่อได้</label>
                                <input type="text" class="form-control" name='contact_family'>
                            </div>
                            {{-- end กรณีฉุกเฉินที่ติดต่อได้ --}}

                            {{-- เกี่ยวข้องกับผู้สมัคร --}}
                            <div class="col-6">
                                <label for="">เกี่ยวข้องกับผู้สมัคร</label>
                                <input type="text" class="form-control" name='associated'>
                            </div>
                            {{-- end เกี่ยวข้องกับผู้สมัคร --}}

                        </div>
                        {{--end row --}}
                        <br>

                        <div class="row">
                            {{--ที่อยู่ --}}
                            <div class="col-6">
                                <label for="">ที่อยู่</label>
                                <input type="text" class="form-control" name='address_family'>
                            </div>
                            {{--end ที่อยู่ --}}

                            {{--โทร --}}
                            <div class="col-6">
                           
                                <label for="">โทร</label>
                                <input type="text" class="form-control" id="" name='#'>
                            </div>
                            {{--end โทร --}}


                        </div>
                        {{-- end row --}}
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <br>

                                {{--ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่ --}}
                                <label for="">ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่</label>
                                <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disease" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">มี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disease" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">ไม่เคยมี</label>
                                </div>
                                {{--end ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่ --}}

                            </div>
                            {{-- ถ้ามีกรุณากรอกโรคประจำตัวของท่าน --}}
                            <div class="col-6">
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
                            <div class="col-6">
                                <label for="">ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน</label>
                                <input type="text" class="form-control" name='warranty_job'>
                            </div>
                            {{--end ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน--}}

                            {{--ตำแหน่ง --}}
                            <div class="col-6">
                                <label for="">ตำแหน่ง</label>
                                <input type="text" class="form-control" name='position_job'>
                            </div>
                            {{--end ตำแหน่ง --}}
                        </div>
                        {{--end row --}}
                        <br>
                        <div class="row">
                            {{-- สถานที่ทำงาน --}}
                            <div class="col-6">
                                <label for="">สถานที่ทำงาน</label>
                                <input type="text" class="form-control" name='office'>
                            </div>
                            {{-- end สถานที่ทำงาน --}}

                            {{-- เบอร์โทร--}}
                            <div class="col-6">
                                <label for="">เบอร์โทร</label>
                                <input type="text" class="form-control" id="" name='phone_job'>
                            </div>
                            {{--end เบอร์โทร--}}
                        </div>
                        {{-- end row --}}
                        <br>

                        <div class="row">
                            {{--เกี่ยวข้องกับผู้สมัครเป็น --}}
                            <div class="col-6">
                                <label for="">เกี่ยวข้องกับผู้สมัครเป็น</label>
                                <input type="text" class="form-control" name='about'>
                            </div>
                            {{--end เกี่ยวข้องกับผู้สมัครเป็น --}}
                            <div class="col-6">

                            </div>
                        </div>
                        {{--end row --}}
                        <br>



                        {{-- photo_card --}}
                        <div class="mb-3">
                            <label for="photo_card">รูป สำเนาบัตรประชาชน พร้อมลายเซ็น*</label>
                            <div><input type="file" id="photo_card" name="photo_card" placeholder="" value="" required=""></div>
                        </div>
                        {{-- end photo_card --}}


                        {{-- photo_address --}}
                        <div class="mb-3">
                            <label for="photo_address">รูป สำเนาทะเบียนบ้าน*</label>
                            <div><input type="file" id="photo_address" name="photo_address" placeholder="" value="" required=""></div>
                        </div>
                        {{-- end photo_address --}}


                        {{-- photo_guide --}}
                        <div class="mb-3">
                            <label for="photo_guide">รูป บัตรไกด์*</label>
                            <div><input type="file" id="photo_guide" name="photo_guide" placeholder="" value="" required=""></div>
                        </div>
                        {{-- end photo_guide --}}
                       

                        {{-- photo_tl --}}
                        <div class="mb-3">
                            <label for="photo_tl">รูป บัตรtl*</label>
                            <div><input type="file" id="photo_tl" name="photo_tl" placeholder="" value="" required=""></div>
                        </div>
                        {{-- end photo_tl --}}
                     
                       
                       
                        <br><br><br>
                        <center><button type="submit" value="บันทึก" class="btn btn-primary ">บันทึกข้อมูล</button></center>

                        <br><br>

                    </div>


                </div>
                {{-- end card --}}







        </form>
        {{-- end: form --}}




    </div>
    {{--end: contrainer --}}




    