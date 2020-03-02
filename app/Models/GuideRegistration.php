<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuideRegistration extends Model
{
    protected $table = 'guides_registrations';
    public $primaryKey = 'id';
    public $itemstamps = false;

    protected $fillable = [
        'invite_id',

        'first_name',
        'last_name',
        'nickname',
        'first_name_en',
        'last_name_en',
        'sex',
        'email',
        'phone',
        'line_id',


        'home',
        'home_street',
        'home_dtrict',
        'home_kat',
        'home_country',
        'home_zip',
        'home_accommodation',
        'address',
        'address_street',
        'address_drict',
        'address_kat',
        'address_country',
        'address_zip',
        'address_accommodation',

        'birdthday',
        'passport_no',
        'passport_exp',
        'chainase',
        'zodiac',
        'age',
        'hight',
        'weight',
        'nationality',
        'origin',
        'religion',
        'id_card',
        'place',
        'expired_card',
        'passport_no',
        'passport_exp',
        'tax_card',
        'security_card',
        'soldier',
        'soldier_year',



        'status',
        'marry',
        'contact_person',
        'workplace_name',
        'position_work',
        'son_max',
        'son_studying',
        'son_not',

        'school_name',
        'school_subject',
        'school_start',
        'school_stop',
        'school_gpa',

        'vocational_name',
        'vocational_subject',
        'vocational_start',
        'vocational_stop',
        'vocational_gpa',

        'bachelor_name',
        'bachelor_subject',
        'bachelor_start',
        'bachelor_stop',
        'bachelor_gpa',

        'diploma_name',
        'diploma_subject',
        'diploma_start',
        'diploma_stop',
        'diploma_gpa',

        'postgraduate_name',
        'postgraduate_subject',
        'postgraduate_start',
        'postgraduate_stop',
        'postgraduate_gpa',

        'workplace',
        'position_workplace',
        'work_other',
        'work_saraly',
        'work_start',
        'work_stop',
        'because_out',

        'speak_th',
        'read_th',
        'write_th',
        'speak_en',
        'read_en',
        'write_en',
        'speak_prc',
        'read_prc',
        'write_prc',





        'contact_family',
        'associated',
        'address_family',
        'phone_family',
        'disease',
        'identify',
        'warranty_job',
        'office',
        'position_job',
        'phone_job',
        'about',

        'bank_id',
        'account_number',
        'user_bank',




    ];

    protected $hidden = [
        // 'password', 'remember_token',
    ];
}
