@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="my-4">


        <div class="d-flex align-items-start">
            <a class="btn btn-light" href="/guides"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <h1 class="ml-2">{{ $data->name }}</h1>
            <span class="ml-1 ui-status {{ $data->state()->type }}">{{ $data->state()->name }}</span>
        </div>
    </div>
    {{-- end: header --}}

    <div class="row">

        <div class="col-md-8 order-md-1">




            {{-- name --}}

            <table class="table">
                <tbody>
                    <tr>
                        <th colspan="2">ข้อมูลพื้นฐาน</th>
                    </tr>
                    <tr>
                        <td>ขื่อ</td>
                        <td>{{ $data->register->first_name }}</td>
                    </tr>

                    <tr>
                        <td>นามสกุล</td>
                        <td>{{ $data->register->last_name }}</td>
                    </tr>
                    <tr>
                        <td>ชื่อ(ภาษาอังกฤษ)</td>
                        <td>{{ $data->register->first_name_en }}</td>
                    </tr>

                    <tr>
                        <td>นามสกุล(ภาษาอังกฤษ)</td>
                        <td>{{ $data->register->last_name_en }}</td>
                    </tr>

                    <tr>
                        <td>ชื่อเล่น</td>
                        <td>{{ $data->register->nickname }}</td>
                    </tr>

                    <tr>

                        <td>เพศ</td>
                        <td>{{ $data->register->sex }}</td>

                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{ $data->register->email}}</td>
                    </tr>
                    <tr>
                        <td>โทรศัพท์</td>
                        <td>{{ $data->register->phone}}</td>
                    </tr>

                    <tr>
                        <td>Line ID</td>
                        <td>{{ $data->register->line_id}}</td>
                    </tr>
                    {{-- end ประวัติส่วนตัว--}}





                    {{-- ประวัตรพื้นฐาน --}}


                    <tr>
                        <th colspan="2">ที่อยู่</th>
                    </tr>
                    <tr>
                        <td>ที่อยู่ตามทะเบียนบ้าน</td>
                        <td>{{ $data->register->home }}</td>
                    </tr>

                    <tr>
                        <td>อำเภอ/เขต</td>
                        <td>{{ $data->register->home_kat }}</td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td>{{ $data->register->home_country }}</td>
                    </tr>

                    <tr>
                        <td>ถนน</td>
                        <td>{{ $data->register->home_street }}</td>
                    </tr>
                    <tr>
                        <td>ตำบล/แขวง</td>
                        <td>{{ $data->register->home_dtrict }}</td>
                    </tr>

                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td>{{ $data->register->home_zip }}</td>
                    </tr>
                    <tr>
                        <td>บ้านที่อาศัยเป็น</td>
                        <td>{{ $data->register->home_accommodation }}</td>
                    </tr>
                    {{--end ที่อยู่ตามทะเบียนบ้าน --}}



                    <tr>
                        <td>ที่อยู่ปัจจุบัน</td>
                        <td>{{ $data->register->address }}</td>
                    </tr>

                    <tr>
                        <td>อำเภอ/เขต</td>
                        <td>{{ $data->register->address_kat }}</td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td>{{ $data->register->address_country }}</td>
                    </tr>

                    <tr>
                        <td>ถนน</td>
                        <td>{{ $data->register->address_street }}</td>
                    </tr>
                    <tr>
                        <td>ตำบล/แขวง</td>
                        <td>{{ $data->register->address_drict }}</td>
                    </tr>

                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td>{{ $data->register->address_zip }}</td>
                    </tr>
                    <tr>
                        <td>บ้านที่อาศัยเป็น</td>
                        <td>{{ $data->register->address_accommodation }}</td>
                    </tr>
                    {{--end ที่อยู่ปัจจุบัน --}}





                    <tr>
                        <th colspan="2">ประวัติส่วนตัว</th>
                    </tr>
                    <tr>
                        <td>วัน/เดือน/ปีเกิด</td>
                        <td>{{ $data->register->birdthday }}</td>
                    </tr>

                    <tr>
                        <td>ปีนักกษัตร</td>
                        <td>{{ $data->register->chainase }}</td>
                    </tr>
                    <tr>
                        <td>ราศี</td>
                        <td>{{ $data->register->zodiac }}</td>
                    </tr>

                    <tr>
                        <td>อายุ</td>
                        <td>{{ $data->register->age }}</td>
                    </tr>

                    <tr>
                        <td>สัญชาติ</td>
                        <td>{{ $data->register->nationality }}</td>
                    </tr>

                    <tr>
                        <td>เชื้อชาติ</td>
                        <td>{{ $data->register->origin}}</td>
                    </tr>

                    <tr>
                        <td>ศาสนา</td>
                        <td>{{ $data->register->religion}}</td>
                    </tr>
                    <tr>
                        <td>น้ำหนัก</td>
                        <td>{{ $data->register->weight}}</td>
                    </tr>

                    <tr>
                        <td>ส่วนสูง</td>
                        <td>{{ $data->register->hight}}</td>
                    </tr>

                    <tr>
                        <td>บัตรประชาชนเลขที่</td>
                        <td>{{ $data->register->id_card }}</td>
                    </tr>

                    <tr>
                        <td>สถานที่ออกบัตร</td>
                        <td>{{ $data->register->place }}</td>
                    </tr>
                    <tr>
                        <td>บัตรหมดอายุ</td>
                        <td>{{ $data->register->expired_card }}</td>
                    </tr>

                    <tr>
                        <td>เลขที่พาสปอร์ต</td>
                        <td>{{ $data->register->passport_no }}</td>
                    </tr>

                    <tr>
                        <td>บัตรหมดอายุ</td>
                        <td>{{ $data->register->passport_exp }}</td>
                    </tr>

                    <tr>
                        <td>บัตรผู้เสียภาษีเลขที่</td>
                        <td>{{ $data->register->tax_card}}</td>
                    </tr>

                    <tr>
                        <td>บัตรประกันสังคมเลขที่</td>
                        <td>{{ $data->register->security_card}}</td>
                    </tr>

                    <tr>
                        <th>ภาวะทางทหาร</th>
                        <td>{{ $data->register->soldier}}</td>
                        <td>{{ $data->register->soldier_year}}</td>
                    </tr>
                    {{-- end ประวัติส่วนตัว--}}


                    <tr>
                        <th colspan="2">ประวัติครอบครัว</th>
                    </tr>
                    <tr>
                        <td>สถานภาพ</td>
                        <td>{{ $data->register->status }}</td>
                    </tr>

                    <tr>
                        <td>กรณีแต่งงาน</td>
                        <td>{{ $data->register->marry }}</td>
                    </tr>
                    <tr>
                        <td>ชื่อภรรยา/สามี</td>
                        <td>{{ $data->register->contact_person }}</td>
                    </tr>

                    <tr>
                        <td>ชื่อ/สถานที่ทำงาน</td>
                        <td>{{ $data->register->workplace_name }}</td>
                    </tr>

                    <tr>
                        <td>ตำแห่นง</td>
                        <td>{{ $data->register->position_work }}</td>
                    </tr>

                    <tr>
                        <td>มีุตร</td>
                        <td>{{ $data->register->son_max}} คน</td>
                    </tr>

                    <tr>
                        <td>จำนวนบุตรที่กำลังเข้าศึกษา</td>
                        <td>{{ $data->register->son_studying}} คน</td>
                    </tr>
                    <tr>
                        <td>จำนวนบุตรที่ยังไม่ได้เข้าศึกษา</td>
                        <td>{{ $data->register->son_not}} คน</td>
                    </tr>

                    {{-- end ประวัติครอบครัว--}}




                    <tr>
                        <th colspan="2">ประวัติการศึกษา</th>
                    </tr>
                    <tr>
                        <th colspan="2">มัธยมศึกษา</th>
                    </tr>
                    <tr>
                        <td>ชื่อสถาบันการศึกษา</td>
                        <td>{{ $data->register->school_name }}</td>
                    </tr>

                    <tr>
                        <td>สาขาวิชา</td>
                        <td>{{ $data->register->school_subject }}</td>
                    </tr>
                    <tr>
                        <td>เริ่มการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->school_start }}</td>
                    </tr>

                    <tr>
                        <td>จบการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->school_stop }}</td>
                    </tr>

                    <tr>
                        <td>เกรดเฉลี่ย</td>
                        <td>{{ $data->register->school_gpa }}</td>
                    </tr>
                    {{-- end มัธยม --}}

                    <tr>
                        <th colspan="2">ปวช.</th>
                    </tr>
                    <tr>
                        <td>ชื่อสถาบันการศึกษา</td>
                        <td>{{ $data->register->vocational_name }}</td>
                    </tr>

                    <tr>
                        <td>สาขาวิชา</td>
                        <td>{{ $data->register->vocational_subject }}</td>
                    </tr>
                    <tr>
                        <td>เริ่มการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->vocational_start }}</td>
                    </tr>

                    <tr>
                        <td>จบการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->vocational_stop }}</td>
                    </tr>

                    <tr>
                        <td>เกรดเฉลี่ย</td>
                        <td>{{ $data->register->vocational_gpa }}</td>
                    </tr>
                    {{-- end ปวช.--}}


                    <tr>
                        <th colspan="2">ปวท./ปวส.</th>
                    </tr>
                    <tr>
                        <td>ชื่อสถาบันการศึกษา</td>
                        <td>{{ $data->register->bachelor_name }}</td>
                    </tr>

                    <tr>
                        <td>สาขาวิชา</td>
                        <td>{{ $data->register->bachelor_subject }}</td>
                    </tr>
                    <tr>
                        <td>เริ่มการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->bachelor_start }}</td>
                    </tr>

                    <tr>
                        <td>จบการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->bachelor_stop }}</td>
                    </tr>

                    <tr>
                        <td>เกรดเฉลี่ย</td>
                        <td>{{ $data->register->bachelor_gpa }}</td>
                    </tr>
                    {{-- end ปวท./ปวส.--}}



                    <tr>
                        <th colspan="2">ปริญญาตรี</th>
                    </tr>
                    <tr>
                        <td>ชื่อสถาบันการศึกษา</td>
                        <td>{{ $data->register->diploma_name }}</td>
                    </tr>

                    <tr>
                        <td>สาขาวิชา</td>
                        <td>{{ $data->register->diploma_subject }}</td>
                    </tr>
                    <tr>
                        <td>เริ่มการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->diploma_start }}</td>
                    </tr>

                    <tr>
                        <td>จบการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->diploma_stop }}</td>
                    </tr>

                    <tr>
                        <td>เกรดเฉลี่ย</td>
                        <td>{{ $data->register->diploma_gpa }}</td>
                    </tr>
                    {{-- end ปริญญาตรี--}}




                    <tr>
                        <th colspan="2">สูงกว่าปริญญาตรี</th>
                    </tr>
                    <tr>
                        <td>ชื่อสถาบันการศึกษา</td>
                        <td>{{ $data->register->postgraduate_name }}</td>
                    </tr>

                    <tr>
                        <td>สาขาวิชา</td>
                        <td>{{ $data->register->postgraduate_subject }}</td>
                    </tr>
                    <tr>
                        <td>เริ่มการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->postgraduate_start }}</td>
                    </tr>

                    <tr>
                        <td>จบการศึกษาเมื่อปี</td>
                        <td>{{ $data->register->postgraduate_stop }}</td>
                    </tr>

                    <tr>
                        <td>เกรดเฉลี่ย</td>
                        <td>{{ $data->register->postgraduate_gpa }}</td>
                    </tr>
                    {{-- end สูงกว่าปริญญาตรี--}}


                    <tr>
                        <th colspan="2">รายละเอียดของงานที่ผ่านมาเรียงจากปัจจุบันก่อน</th>
                    </tr>
                    <tr>
                        <td>สถานที่ทำงาน (ชื่อสถานที่) 1.</td>
                        <td>{{ $data->register->workplace }}</td>
                    </tr>

                    <tr>
                        <td>ตำแห่นง</td>
                        <td>{{ $data->register->position_workplace }}</td>
                    </tr>
                    <tr>
                        <td>ลักษณะงานและความรับผิดชอบโดยสังเขป</td>
                        <td>{{ $data->register->work_other }}</td>
                    </tr>

                    <tr>
                        <td>ค่าจ้าง</td>
                        <td>{{ $data->register->work_saraly }}</td>
                    </tr>

                    <tr>
                        <td>ระยะเวลา จาก</td>
                        <td>{{ $data->register->work_start }}</td>
                    </tr>
                    <tr>
                        <td>ถึง</td>
                        <td>{{ $data->register->work_stop }}</td>
                    </tr>
                    <tr>
                        <td>เหตุผลที่ออก</td>
                        <td>{{ $data->register->because_out }}</td>
                    </tr>
                    {{-- end งานที่เคยทำ--}}


                    <tr>
                        <th colspan="2">ความถนัดของภาษา</th>
                    </tr>
                    <tr>
                        <th colspan="2">ภาษาไทย</th>
                    </tr>
                    <tr>
                        <td>พูด</td>
                        <td>{{ $data->register->speak_th }}</td>
                    </tr>

                    <tr>
                        <td>อ่าน</td>
                        <td>{{ $data->register->read_th }}</td>
                    </tr>
                    <tr>
                        <td>เขียน</td>
                        <td>{{ $data->register->write_th }}</td>
                    </tr>
                    {{-- end ภาษาไทย --}}
                    <tr>
                        <th colspan="2">ภาษาอังกฤษ</th>
                    </tr>
                    <tr>
                        <td>พูด</td>
                        <td>{{ $data->register->speak_en }}</td>
                    </tr>

                    <tr>
                        <td>อ่าน</td>
                        <td>{{ $data->register->read_en }}</td>
                    </tr>
                    <tr>
                        <td>เขียน</td>
                        <td>{{ $data->register->write_en }}</td>
                    </tr>
                    {{-- end ภาษาอังกฤษ --}}
                    <tr>
                        <th colspan="2">ภาษาจีน</th>
                    </tr>
                    <tr>
                        <td>พูด</td>
                        <td>{{ $data->register->speak_prc}}</td>
                    </tr>
                    <tr>
                        <td>อ่าน</td>
                        <td>{{ $data->register->read_prc}}</td>
                    </tr>
                    <tr>
                        <td>เขียน</td>
                        <td>{{ $data->register->write_prc}}</td>
                    </tr>
                    {{-- end ภาษาจีน --}}


                    <?php
                    $lng[] = json_decode($data->register->languages_ot, 1);

                    
                    ?>

                    @foreach($lng as $key => $value)

                    <tr>
                        <th colspan="2">{{$value[0]}}</th>
                    </tr>
                    <tr>
                        <td>พูด</td>
                        <td>{{$value[1]}}</td>
                    </tr>
                    <tr>
                        <td>อ่าน</td>
                        <td>{{$value[2]}}</td>
                    </tr>
                    <tr>
                        <td>เขียน</td>
                        <td>{{$value[3]}}</td>
                    </tr>
                    @endforeach


                    <?php
                    $lngv1[] = json_decode($data->register->languages_v1, 1);

                    
                    ?>

                    @foreach($lngv1 as $key => $value)

                    <tr>
                        <th colspan="2">{{$value[0]}}</th>
                    </tr>
                    <tr>
                        <td>พูด</td>
                        <td>{{$value[1]}}</td>
                    </tr>
                    <tr>
                        <td>อ่าน</td>
                        <td>{{$value[2]}}</td>
                    </tr>
                    <tr>
                        <td>เขียน</td>
                        <td>{{$value[3]}}</td>
                    </tr>
                    @endforeach



                    <?php
                    $lngv2[] = json_decode($data->register->languages_v2, 1);

                    
                    ?>

                    @foreach($lngv2 as $key => $value)

                    <tr>
                        <th colspan="2">{{$value[0]}}</th>
                    </tr>
                    <tr>
                        <td>พูด</td>
                        <td>{{$value[1]}}</td>
                    </tr>
                    <tr>
                        <td>อ่าน</td>
                        <td>{{$value[2]}}</td>
                    </tr>
                    <tr>
                        <td>เขียน</td>
                        <td>{{$value[3]}}</td>
                    </tr>
                    @endforeach







                    <tr>
                        <td>กรณีฉุกเฉินที่ติดต่อได้</td>
                        <td>{{ $data->register->contact_family }}</td>
                    </tr>
                    <tr>
                        <td>เกี่ยวข้องกับผู้สมัคร</td>
                        <td>{{ $data->register->associated }}</td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td>{{ $data->register->address_family }}</td>
                    </tr>

                    <tr>
                        <td>โทร</td>
                        <td>{{ $data->register->phone_family }}</td>
                    </tr>
                    <tr>
                        <td>ท่านเคยมีโรคประจำตัวเรื้อรังหรือไม่</td>
                        <td>{{ $data->register->disease }}</td>
                    </tr>
                    <tr>
                        <td>ถ้ามีกรุณากรอก</td>
                        <td>{{ $data->register->identify }}</td>
                    </tr>

                    <tr>
                        <td>ชื่อผู้ค้ำประกันการทำงาน/แนะนำการทำงาน</td>
                        <td>{{ $data->register->warranty_job }}</td>
                    </tr>
                    <tr>
                        <td>ตำแหน่ง</td>
                        <td>{{ $data->register->office }}</td>
                    </tr>
                    <tr>
                        <td>สถานที่ทำงาน</td>
                        <td>{{ $data->register->position_job }}</td>
                    </tr>

                    <tr>
                        <td>เบอร์โทร</td>
                        <td>{{ $data->register->about }}</td>
                    </tr>
                    <tr>
                        <td>เกี่ยวข้องกับผู้สมัครเป็น</td>
                        <td>{{ $data->register->write_th }}</td>
                    </tr>


                </tbody>

            </table>




            @if ( $data->status==2 )

            <form class="alert alert-warning" action="{{ asset( '/guides/'.$data->id ) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="PUT" name="_method" autocomplete="off" />
                <input type="hidden" value="{{ $data->id }}" name="id" autocomplete="off" />
                 <input type="hidden" name="role_id" value="4">



                <h4 class="mb-3">ผลการตรวจสอบ</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="status" type="radio" class="custom-control-input" value="0" checked="" required="">
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
            </form>
            @endif

        </div>

    </div>

</div>
{{-- end: container --}}

@endsection