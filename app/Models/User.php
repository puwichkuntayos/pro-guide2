<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Auth;

class User extends Model
{
    // use Notifiable;
    protected $table = 'users';
    public $primaryKey = 'id';
    public $itemstamps = false;
    public $maxlimit = 24;

    protected $fillable = [
        'name', 'username', 'password',

        'email', 'phone', 'line',

        'status','role_id','personal_id','address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    # get: Data form database
    public function get($id){

        $sth = DB::table( $this->table );

        // $sth->select( $this->fillable );
        // set condition

        $sth->where($this->primaryKey, '=', $id );
        // $sth->where( 'status', '=', 1 );

        $results = $sth->first();

        $res = [];
        if( !empty($results) ){
            $res['data'] = $this->convert($results);
        }

        return $res;
    }

    public function find($request)
    {
        # set options
        $ops = array(
            'limit' => intval(isset($request->limit)? $request->limit: 24),
            'page' => intval(isset($request->page)? $request->page: 1),

            'ts' => isset($request->ts)? $request->ts: time(),
        );

        if($ops['limit'] >= $this->maxlimit){
            $ops['limit'] = $this->maxlimit;
        }

        # connect DB
        $sth = DB::table( $this->table );

        # set select: fields
        // $sth->select( $this->fields );

        # set condition 
        if( $request->has('status') ){

            if( is_numeric($request->status) ) {
                $sth->where( 'status', '=', $request->status );
            }
        }

        if( !empty($request->q) ){
            $sth->where( 'name', 'LIKE', "{$request->q}%" );
        }

        if(Auth::user()->role_id == 4){
             $sth->where('id',Auth::user()->id); 
        }

         if(Auth::user()->role_id == 2){
             $sth->where('id',Auth::user()->id); 
        }

        if(Auth::user()->role_id == 3){
            $sth->where('id',Auth::user()->id); 
        }

        # set sort data
        if( $request->has('sort') ){
            // $ops['sort'] = $request->sort;
            // $sort = $ops['sort'];

            // if( $sort=='' ){
            //     $sort = 'updated_at desc';
            // }
            // else{
            //     $sort = 'updated_at desc';
            // }
        }
        else{
            $sth->orderby( 'updated_at', 'desc' );
            $sth->orderby( 'name', 'asc' );
        }

        $sth->skip( ($ops['page']*$ops['limit'])- $ops['limit']);
        $sth->take( $ops['limit'] );

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
    public function buildFrag($results, $options=[]) {
        $data = [];
        foreach ($results as $key => $value) { if( empty($value) ) continue; $data[] = $this->convert( $value ); }
        return $data;
    }
    public function convert($data){

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
        $items[] = ['id'=>1, 'name'=>'เปิดใช้งาน'];
        $items[] = ['id'=>0, 'name'=>'ระงับ'];

        return $items;
    }

    public function roles()
    {
        $items = [];
        if(Auth::user()->role_id == 1){
             $items[] = ['id'=>1, 'name'=>'ผู้ดูแล'];
             $items[] = ['id'=>2, 'name'=>'บัญชี'];
             $items[] = ['id'=>3, 'name'=>'หัวหน้าทัวร์'];
             $items[] = ['id'=>4, 'name'=>'ไกด์'];
        }else{
            $items[] = ['id'=>2, 'name'=>'บัญชี'];
        }
       
   

        return $items;
    }
}
