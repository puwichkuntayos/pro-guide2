<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuideRegister extends Model
{
    // use Notifiable;
    protected $table = 'guide_registers';
    public $primaryKey = 'id';
    public $itemstamps = false;
    public $maxlimit = 24;
    public $incrementing = false;


    protected $fillable = [
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
        'about'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    # get: Data form database
    public function get($id)
    {

        $sth = DB::table($this->table);

        // $sth->select( $this->fillable );
        // set condition

        $sth->where($this->primaryKey, '=', $id);
        // $sth->where( 'status', '=', 1 );

        $results = $sth->first();

        $res = [];
        if (!empty($results)) {
            $res['data'] = $this->convert($results);
        }

        return $res;
    }

    public function find($request)
    {
        # set options
        $ops = array(
            'limit' => intval(isset($request->limit) ? $request->limit : 24),
            'page' => intval(isset($request->page) ? $request->page : 1),

            'ts' => isset($request->ts) ? $request->ts : time(),
        );

        if ($ops['limit'] >= $this->maxlimit) {
            $ops['limit'] = $this->maxlimit;
        }

        # connect DB
        $sth = DB::table($this->table);

        # set select: fields
        // $sth->select( $this->fields );

        # set condition 
        if ($request->has('status')) {

            if (is_numeric($request->status)) {
                $sth->where('status', '=', $request->status);
            }
        }

        if (!empty($request->q)) {
            $sth->where('first_name', 'LIKE', "{$request->q}%");
        }

        # set sort data
        if ($request->has('sort')) {
            // $ops['sort'] = $request->sort;
            // $sort = $ops['sort'];

            // if( $sort=='' ){
            //     $sort = 'updated_at desc';
            // }
            // else{
            //     $sort = 'updated_at desc';
            // }
        } else {
            $sth->orderby('updated_at', 'desc');
            $sth->orderby('first_name', 'asc');
        }

        $sth->skip(($ops['page'] * $ops['limit']) - $ops['limit']);
        $sth->take($ops['limit']);

        # get results
        $results = $sth->paginate($ops['limit']);

        // dd(DB::getQueryLog());

        # response
        $ops['total'] = $results->total();



        // if( !empty($this->uri) ){

        //     $paramquery = http_build_query([
        //         'limit' => $ops['limit'],
        //     ]);

        //     if( ($ops['page']*$ops['limit']) < $ops['total']  ){
        //         $ops['next'] = asset( $this->uri. '?page='.($ops['page']+1).'&'.$paramquery );
        //     }

        //     if($ops['page']>1){
        //         $ops['prev'] = asset( $this->uri. '?page='.($ops['page']-1).'&'.$paramquery);
        //     }
        // }

        return [
            'options'   => $ops,
            'data'      => $this->buildFrag($results->items()),
            'total'     => $results->total(),
        ];
    }


    # convert: Data
    public function buildFrag($results, $options = [])
    {
        $data = [];
        foreach ($results as $key => $value) {
            if (empty($value)) continue;
            $data[] = $this->convert($value);
        }
        return $data;
    }
    public function convert($data)
    {

        // $permalink = strtolower($data->name);
        // $data->permalink = asset('/tours/countries/'.$permalink);

        // $data->name = ucwords($permalink);

        // if( !empty( $data->avatar ) ){
        //     $data->avatar_url = asset("storage/{$data->avatar}");
        // }

        return $data;
    }



    public static function status()
    {
        $items = [];
        // $items[] = ['id'=>'', 'name'=>'ทั้งหมด'];
        $items[] = ['id'=>0, 'name'=>'ปฎิเสธ'];
        $items[] = ['id'=>1, 'name'=>'ใช้งาน'];
        $items[] = ['id'=>2, 'name'=>'รอตรวจสอบ'];
        $items[] = ['id'=>3, 'name'=>'กำลังเชิญ'];
        $items[] = ['id'=>4, 'name'=>'หมดอายุ'];

        return $items;
    }

    // public function roles()
    // {
    //     $items = [];
    //     $items[] = ['id'=>1, 'name'=>'ผู้ดูแล'];
    //     $items[] = ['id'=>3, 'name'=>'ผู้ลงข้อมูล'];
    //     $items[] = ['id'=>2, 'name'=>'ลูกค้า'];

    //     return $items;
    // }
}
