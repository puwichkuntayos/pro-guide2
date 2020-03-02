<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides_registrations', function (Blueprint $table) {
            $table->increments('id');

            // ชื่อ
            $table->integer('invite_id')->comment('FK guides_invites->id : เชิญ');

            $table->string('first_name', 40);
            $table->string('last_name', 40);
            $table->string('nickname', 20)->nullable()->comment('ชื่อเล่น');

            $table->string('first_name_en', 40)->nullable()->comment('ชื่อภาษาอังกฤษ');
            $table->string('last_name_en', 40)->nullable()->comment('นามสกุลภาษาอังกฤษ');

            $table->string('sex',4)->nullable()->comment('เพศ');
            #อันนี้ยังไม่ได้สร้าง
            $table->string('email', 40)->nullable()->comment('อีเมล');
            $table->string('phone')->nullable()->comment('เบอร์โทร');
            $table->string('line_id', 20)->nullable()->comment('ไลน์ไอดี');



            $table->string('passport_no', 9)->nullable()->comment('เลข passport');;
            $table->string('passport_exp', 10)->nullable()->comment('วันหมดอายุ passport');  #เก็บเป็นวันที่


            //ที่อยู่ตามทะเบียนบ้าน
            $table->string('home', 10)->nullable()->comment('ที่อยู่ตามทะเบียนบ้าน');
            $table->string('home_street', 40)->nullable()->comment('ถนน');
            $table->string('home_dtrict', 40)->nullable()->comment('ตำบล/แขวง');
            $table->string('home_kat', 40)->nullable()->comment('อำเภอ/เขต');
            $table->string('home_country', 40)->nullable()->comment('จังหวัด');
            $table->bigInteger('home_zip')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('home_accommodation',20)->nullable()->comment('ที่พักอาศัยเป็น');

            //ที่อยู่ปัจจุบัน
            $table->string('address', 10)->nullable()->comment('ที่อยู่ปัจจุบัน');
            $table->string('address_street', 40)->nullable()->comment('ถนน');
            $table->string('address_drict', 40)->nullable()->comment('ตำบล/แขวง');
            $table->string('address_kat', 40)->nullable()->comment('อำเภอ/เขต');
            $table->string('address_country', 40)->nullable()->comment('จังหวัด');
            $table->bigInteger('address_zip')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('address_accommodation',20)->nullable()->comment('ที่พักอาศัยเป็น');

            #ประวัติส่วนตัว
            $table->date('birdthday')->nullable()->comment('วันเกิด');  #เก็บเป็นวันที่
            $table->string('chainase',10)->nullable()->comment('ปีนักกษัตร');
            $table->string('zodiac',10)->nullable()->comment('ราศี');
            $table->bigInteger('age')->nullable()->comment('อายุ');
            $table->bigInteger('hight')->nullable()->comment('สูง');
            $table->bigInteger('weight')->nullable()->comment('น้ำหนัก');

            #สัญชาติ
            $table->string('nationality', 20)->nullable()->comment('สัญชาติ');
            $table->string('origin', 20)->nullable()->comment('เชื้อชาติ');
            $table->string('religion', 20)->nullable()->comment('ศาสนา');

            #บัตรประชาชน
            $table->bigInteger('id_card')->nullable()->comment('บัตรประชาชน');
            $table->string('place', 40)->nullable()->comment('สถานที่ออกบัตร');
            $table->date('expired_card')->nullable()->comment('วันหมดอายุของบัตรประชาชน');  #เก็บเป็นวันที่
            $table->bigInteger('tax_card')->nullable()->comment('บัตรผู้เสียหายภาษี');
            $table->bigInteger('security_card')->nullable()->comment('บัตรประกันสังคม');

            #สภาพทางทหาร
            $table->string('soldier',35)->nullable()->comment('สภาพทางทหาร');
            $table->date('soldier_year')->nullable()->comment('จะเกณฑ์ในปี');

            #สถานภาพ
            $table->string('status',4)->nullable()->comment('สถานภาพ');
            $table->string('marry',20)->nullable()->comment('กรณีแต่งงาน');
            $table->string('contact_person', 40)->nullable()->comment('ติดต่อบุคคลอื่น');
            $table->string('workplace_name', 40)->nullable()->comment('ชื่อสถานที่ทำงาน');
            $table->string('position_work', 40)->nullable()->comment('ตำแหน่ง');

            #บุตร
            $table->bigInteger('son_max')->nullable()->comment('จำนวนบุตร');
            $table->bigInteger('son_studying')->nullable()->comment('กำลังศึกษา');
            $table->bigInteger('son_not')->nullable()->comment('ยังไเข้าศึกษา');




            #มัธยม

            $table->string('school_name', 40)->nullable()->comment('ชื่อโรงเรียน');
            $table->string('school_subject', 40)->nullable()->comment('สาขาวิชา');
            $table->date('school_start')->nullable()->comment('เริ่ม');
            $table->date('school_stop')->nullable()->comment('จบ');
            $table->float('school_gpa')->nullable()->comment('เกรดเฉลี่ย');


            #ปวช.

            $table->string('vocational_name', 40)->nullable()->comment('ชื่อสถาบันปวช.');
            $table->string('vocational_subject', 40)->nullable()->comment('สาขาวิชา');
            $table->date('vocational_start')->nullable()->comment('เริ่ม');
            $table->date('vocational_stop')->nullable()->comment('จบ');
            $table->float('vocational_gpa')->nullable()->comment('เกรดเฉลี่ย');

            #ปวท./ปวส

            $table->string('bachelor_name', 40)->nullable()->comment('ชื่อสถาบันปวท./ปวส ');
            $table->string('bachelor_subject', 40)->nullable()->comment('สาขาวิชา');
            $table->date('bachelor_start')->nullable()->comment('เริ่ม');
            $table->date('bachelor_stop')->nullable()->comment('จบ');
            $table->float('bachelor_gpa')->nullable()->comment('เกรดเฉลี่ย');

            #ชื่อสถาบันปริญญาตรี 

            $table->string('diploma_name', 40)->nullable()->comment('ชื่อสถาบันปริญญาตรี ');
            $table->string('diploma_subject', 40)->nullable()->comment('สาขาวิชา');
            $table->date('diploma_start')->nullable()->comment('เริ่ม');
            $table->date('diploma_stop')->nullable()->comment('จบ');
            $table->float('diploma_gpa')->nullable()->comment('เกรดเฉลี่ย');


            #ชื่อสถาบันที่เรียนสูงกว่าปริญญาตรี

            $table->string('postgraduate_name', 40)->nullable()->comment('ชื่อสถาบันที่เรียนสูงกว่าปริญญาตรี ');
            $table->string('postgraduate_subject', 40)->nullable()->comment('สาขาวิชา');
            $table->date('postgraduate_start')->nullable()->comment('เริ่ม');
            $table->date('postgraduate_stop')->nullable()->comment('จบ');
            $table->float('postgraduate_gpa')->nullable()->comment('เกรดเฉลี่ย');

            #ที่ทำงานเก่า

            $table->string('workplace', 40)->nullable()->comment('สถานที่ทำงาน');
            $table->string('position_workplace', 40)->nullable()->comment('ตำแหน่งงานเดิม');
            $table->string('work_other', 40)->nullable()->comment('เกี่ยวกับงานเดิม');
            $table->bigInteger('work_saraly')->nullable()->comment('เงินเดือนที่ทำงานเก่า');
            $table->date('work_start')->nullable()->comment('เริ่มทำงาน');
            $table->date('work_stop')->nullable()->comment('เวลาออกงาน');
            $table->string('because_out')->nullable()->comment('เหตุผลที่ออก');

            #ภาษา


            $table->string('speak_th',10)->nullable()->comment('พูด(ภาษาไทย)');
            $table->string('read_th',10)->nullable()->comment('อ่าน(ภาษาไทย)');
            $table->string('write_th',10)->nullable()->comment('เขียน(ภาษาไทย)');
            $table->string('speak_en',10)->nullable()->comment('พูด(ภาษาอังกฤษ)');
            $table->string('read_en',10)->nullable()->comment('อ่าน(ภาษาอังกฤษ)');
            $table->string('write_en',10)->nullable()->comment('เขียน(ภาษาอังกฤษ)');
            $table->string('speak_prc',10)->nullable()->comment('พูด(ภาษาจีน)');
            $table->string('read_prc',10)->nullable()->comment('อ่าน(ภาษาจีน)');
            $table->string('write_prc',10)->nullable()->comment('เขียน(ภาษาจีน)');

            $table->text('languages_ot')->nullable()->comment('ภาษาอื่นๆ');
            $table->text('languages_v1')->nullable()->comment('ภาษาอื่นๆ');
            $table->text('languages_v2')->nullable()->comment('ภาษาอื่นๆ');

            #บุคคลติดต่อฉุกเฉิน
            $table->string('contact_family', 40)->nullable()->comment('กรณีฉุกเฉินบุคคลที่ติดต่อได้');
            $table->string('associated', 20)->nullable()->comment('เกี่ยวข้องเป็น');
            $table->string('address_family', 40)->nullable()->comment('ที่อยู่');
            $table->bigInteger('phone_family')->nullable()->comment('เบอร์โทร');

            #โรคประจำตัว
            $table->string('disease',10)->nullable()->comment('โรคประจำตัว');
            $table->string('identify', 20)->nullable()->comment('ถ้ามีโปรดระบุ');


            $table->string('warranty_job', 80)->nullable()->comment('ชื่อผู้ค้ำประกันการทำงาน');
            $table->string('office', 80)->nullable()->comment('สถานที่ทำงาน');
            $table->string('position_job', 80)->nullable()->comment('ตำแหน่งงาน');
            $table->bigInteger('phone_job')->nullable()->comment('เบอร์โทร');

            #เกี่ยวกับท่านเป็น
            $table->string('about', 20)->nullable()->comment('เกี่ยวกับท่านเป็น');


            #รูปประจำตัว
            $table->string('profile', 40)->nullable()->comment('รูปประจำตัว');

            #รูปสำเนาบัตรประชาชน
            $table->string('photo_card', 40)->nullable()->comment('รูปสำเนาบัตรประชาชน');

            #รูปทะเบียนบ้าน
            $table->string('photo_address', 40)->nullable()->comment('รูปทะเบียนบ้าน');

            #รูปบัตรไกด์
            $table->string('photo_guide', 40)->nullable()->comment('รูปบัตรไกด์');

            #รูปบัตร tl
            $table->string('photo_tl', 40)->nullable()->comment('รูปบัตร tl');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guides_registrations');
    }
}
