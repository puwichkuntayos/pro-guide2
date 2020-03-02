<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuideInviteRequest;
use App\Mail\GuideFailMail;
use App\Mail\GuideInviteMail;
use App\Mail\GuideSuccessMail;
use App\Models\Guide;
use App\Models\GuideInvite;
use App\Models\User;
use App\Models\GuideRegistration;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Storage;


class GuideController extends Controller
{
    public function index(Request $request)
    {
        $tab = basename(Route::getFacadeRoot()->current()->uri);

        $tabs = [
            'guides' => [
                'title' => 'ทั้งหมด',
            ],
            'confirm' => [
                'title' => 'ยืนยันแล้ว',
                'options'=>[
  					           'status'=> 1
  				               ]
            ],
            'verify' => [
                'title' => 'รอตรวจสอบ',
                'options'=>[
  					           'status'=> 2
  				               ]
            ],
            'invited' => [
                'title' => 'กำลังเชิญ',
                'options'=>[
  					           'status'=> 3
  				               ]
            ], 
            'wait' => [
                'title' => 'รอแก้ไข',
                'options'=>[
                               'status'=> 4
                               ]
            ],
            'cancel' => [
                'title' => 'ปฎิเสธ',
                'options'=>[
  					           'status'=> 0
  				               ]
            ],
            'exp' => [
                'title' => 'หมดอายุ',
            ],

        ];

        if( in_array($tab, array_keys($tabs)) ){
          // dd($tab);
            $ops = $tabs[$tab];
            $ops['url'] = '/guides/find/'.$tab;

            return view('pages.guide.index')->with( GuideController::_init( $request, $ops ) );
        }
        else{

            throw new AuthorizationException('You do not have permission to view this page');
        }
    }

    public function invite()
    {
        return view('forms.guide.invite');
    }
    public function inviteStore(GuideInviteRequest $request)
    {
        $data = new GuideInvite();

        if( $data->fill( $request->input() )->save() ){

            // update back-end
            $data->status = 3;
            $data->remember_token = str_random(10);

            // เวลา 30นาที
            $data->exp = date("Y/m/d H:i:s", strtotime("+30 minutes"));

            $data->update();


            // send mail
            Mail::to( $request->email )->send( new GuideInviteMail([
                'name' => $request->name,
                'message' => $request->remake,
                'id' => $data->id
            ]) );


            // saved.
            $res['code'] = 200;
            $res['message'] = 'บันทึกข้อมูลแล้ว';

            $res['call'] = 'refreshDatatable';
            // $res['redirect'] = "/tours/series/{$data->id}/edit";

        }
        else{
            // fall.

            $res['code'] = 402;
            $res['message'] = 'บันทึกข้อมูลล้มเหลว, กรุณาลองใหม่';
        }


        // callback
        return response()->json($res, $res['code']);

    }
    public function reinvite($id)
    {
        $data = GuideInvite::findOrFail($id);



        return view('forms.guide.reinvite', compact('data'));
    }
    public function reinviteStore( Request $request )
    {
        $data = GuideInvite::findOrFail($request->id);

        if( $data->fill( $request->input() )->update() ){

            $data->status = 3;
            $data->remember_token = str_random(10);

            $data->exp = date("Y/m/d H:i:s", strtotime("+30 minutes"));

            $data->update();


            // send mail
            Mail::to( $data->email )->send( new GuideInviteMail([
                'name' => $request->name,
                'message' => $request->remake,
                'id' => $data->id
            ]) );


            $res['code'] = 200;
            $res['message'] = 'บันทึกข้อมูลแล้ว';

            $res['call'] = 'refreshDatatable';
        }
        else{
            $res['code'] = 402;
            $res['message'] = 'บันทึกข้อมูลล้มเหลว, กรุณาลองใหม่';
        }

        return response()->json($res, $res['code']);
    }



    public function show($id)
    {
        // $data = GuideInvite::findOrFail( $id )->first();
        $data = GuideInvite::where('id',$id)->first();
        // dd($data);
            // if(!empty($data->id)){
                $data2 = GuideRegistration::where('invite_id',$id)->first();
            // }
                // dd($data2);
                // if(!empty($data->id)){
                $lng = json_decode($data2->languages_ot, 1);
                $lng1 = json_decode($data2->languages_v1, 1);
                $lng2 = json_decode($data2->languages_v2, 1);
        // dd($data);
        return view('pages.guide.tab_guide', compact('data2','data','lng','lng1','lng2'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->input());
        $data = GuideInvite::findOrFail($id);
        // dd($data);
        // // $role = GuideRegistration::findOrFail( $id );

        // if( $data->fill( $request->input() )->update() ){


            // send mail
            if($request->checkprofile== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
                // $profiepic = $picdata->profile;
                // $photo_cardpic = $picdata->photo_card;
                // $photo_addresspic = $picdata->photo_address;
                // $photo_guidepic = $picdata->photo_guide;
                // $photo_tlpic = $picdata->photo_tl;

               


                // if(!empty($profiepic)){
                //     Storage::disk('public')->delete($picdata->profile);
                // }
                // if(!empty($photo_cardpic)){
                //     Storage::disk('public')->delete($picdata->photo_card);
                // }
                // if(!empty($photo_addresspic)){
                //     Storage::disk('public')->delete($picdata->photo_address);
                // }
                // if(!empty($photo_addresspic)){
                //     Storage::disk('public')->delete($picdata->photo_guidepic);
                // }
                // if(!empty($photo_addresspic)){
                //     Storage::disk('public')->delete($picdata->photo_tlpic);
                // }

                // if(!empty($request->profiepic)){
                //     Storage::disk('public')->delete($picdata->profile);
                // }
                // if(!empty($request->photo_cardpic)){
                //     Storage::disk('public')->delete($picdata->photo_card);
                // }
                // if(!empty($request->photo_addresspic)){
                //     Storage::disk('public')->delete($picdata->photo_address);
                // }
                // if(!empty($request->photo_addresspic)){
                //     Storage::disk('public')->delete($picdata->photo_guidepic);
                // }
                // if(!empty($request->photo_addresspic)){
                //     Storage::disk('public')->delete($picdata->photo_tlpic);
                // }

                // $picdata->profile = $request->profile;
                // $picdata->photo_card = $request->photo_card;
                // $picdata->photo_address = $request->photo_address;
                // $picdata->photo_guide = $request->photo_guide;
                // $picdata->photo_tl = $request->photo_tl;

                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));

            }elseif ($request->checkaddress== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
    
                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));

            }elseif ($request->checkproname== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
    
                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));

            }elseif ($request->checkfamily== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
    
                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));

            }elseif ($request->checkeducation== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
    
                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));

            }elseif ($request->checkwork== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
    
                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));

            }elseif ($request->checklang== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
    
                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));
            }elseif ($request->checkpic== 0){

                Mail::to( $data->email )->send( new GuideFailMail([
                    'name' => $data->name,
                    // 'message' => $request->remake,
                    'id' => $data->id,
                ]) );

                // $data->delete();
                $picdata = GuideRegistration::where('invite_id',$id)->first();
    
                $picdata->checkprofile = $request->checkprofile;
                $picdata->alertprofile = $request->alertprofile;

                $picdata->checkaddress = $request->checkaddress;
                $picdata->alertaddress = $request->alertaddress;

                $picdata->checkproname = $request->checkproname;
                $picdata->alertproname = $request->alertproname;

                $picdata->checkfamily = $request->checkfamily;
                $picdata->alertfamily = $request->alertfamily;

                $picdata->checkeducation = $request->checkeducation;
                $picdata->alerteducation = $request->alerteducation;

                $picdata->checkwork = $request->checkwork;
                $picdata->alertwork = $request->alertwork;

                $picdata->checklang = $request->checklang;
                $picdata->alertlang = $request->alertlang;

                $picdata->checkpic = $request->checkpic;
                $picdata->alertpic = $request->alertpic;
                $picdata->update();

                $data = GuideInvite::findOrFail($id);
                $data->status = 4;
                $data->update();
                // $data->delete();

                return redirect(asset('/guides'));
            }

            else{

                $datastatus = GuideInvite::findOrFail($id);

                $datastatus->status = 1;
                $datastatus->update();

                $user = new User();
                $user->name = $data->name;
                $user->email = $data->email;
                $user->username = $data->email;
                $user->role_id = 4;


                $password = $this->fn->q('user')->generateStrongPassword();
                $user->password = Hash::make($password);
                $user->status = 1;
                $user->remember_token = str_random(10);
                $user->new_password = 1;

                if( $user->save() ){

                    Mail::to( $data->email )->send( new GuideSuccessMail([
                        'name' => $data->name,
                        'message' => $request->remake,
                        'id' => $data->id,
                        'username' => $data->email,
                        'password' => $password,
                    ]) );

                    $data->user_id = $user->id;
                    $data->update();
                }
               
            }
            
             return redirect(asset('/guides'));
       

        // return redirect()->back()->with(['message'=>'เกิดข้อผิดพลาด, กรุณาลองใหม่']);
    }


    // set Datatable
    public static function _init ($request, $ops=[] )
    {
        return [
            'title' => '',

            'navleft' => GuideController::_leftMenu($request),

            'datatable' => [
                'title' => isset($ops['title'])? $ops['title']: 'ตะกร้า',

                'options' => [
                    'limit' => 24
                ],
                "url" => $ops['url'],

                'filters' => GuideController::_filters( $ops ),
            ],
        ];
    }
    public static function _leftMenu($request)
    {
        return [
            [
                // "name" => "สถานะ",
                "items" => [
                    [
                        "id"=> "/guides",
                        "name" => "ทั้งหมด",
                        'count' => GuideInvite::count()


                    ],
                    [
                        "id"=> "/guides/confirm",
                        "name" => "ใช้งาน",
                        "active"=> 1,
                        'count' => GuideInvite::
                              where([
                                  ['status', 1],
                              ])
                              ->count()

                    ],
                    [
                        "id"=> "/guides/verify",
                        "name" => "รอตรวจสอบ",
                        "active"=> 2,
                        'count' => GuideInvite::
                              where([
                                  ['status', 2],
                              ])
                              ->count()

                    ],
                    [
                        "id"=> "/guides/invited",
                        "name" => "กำลังเชิญ",
                        "active"=> 3,
                        'count' => GuideInvite::
                              where([
                                  ['status', 3],
                              ])
                              ->count()

                    ], 
                    [
                        "id"=> "/guides/wait",
                        "name" => "รอแก้ไข",
                        "active"=> 4,
                        'count' => GuideInvite::
                              where([
                                  ['status', 4],
                              ])
                              ->count()

                    ],



                ]
            ],

            [
                "items" => [
                    [
                        "id"=> "/guides/cancel",
                        "name" => "ปฎิเสธ",
                        "active"=> 0,
                        'count' => GuideInvite::
                              where([
                                  ['status', 0],
                              ])
                              ->count()

                    ],
                ]

            ]
        ];
    }
    public static function _filters( $ops=[] )
    {
        $ops = array_merge( [
            'status' => 1,
            'state' => '',
        ], $ops );


        $filters = [];


        // selectbox
        $filters[] = [ 'position' => 'topLeft', 'type' => 'selectbox', 'items'=> array_merge([['id'=>'', 'name'=>'ทั้งหมด']], Guide::status()), 'name' => 'status'];

        // : searchbox ค้นหา

        $filters[] = [ 'position' => 'topLeft', 'type' => 'searchbox', 'name' => 'q',];


        $filters[] = [
            'position' => 'topRight',
            'type' => 'link',

            'style' => 'primary',

            'url' => '/guides/invite',

            'attr' => [
                'data-plugin' => 'lightbox'
            ],

            'label' => '<i class="fa fa-envelope-o"></i><span class="ml-1">เชิญไกด์</span>'
        ];


        return $filters;
    }



    public function find(Request $request,$tab='')
    {
      // dd($tab);
        $ops = [
            'sort' => isset($request->sort)? $request->sort: 'updated_at',
            'dir' => isset($request->dir)? $request->dir: 'desc',

            'limit' => isset($request->limit)? $request->limit: 1,
            'page' => isset($request->page)? $request->page: 1,

            'ts' =>  isset($request->ts)? $request->ts: time(),
        ];

        $where = [];

        if( $request->has('status') ){
            if( $request->status!='' ){
                $where[] = ['status', '=', $request->status];
            }
        }

        if($tab =='verify'){
          $where[] = ['status',2];
        }

        if($tab =='confirm'){
          $where[] = ['status',1];
        }

        if($tab =='cancel'){
          $where[] = ['status',0];
        }
        if($tab =='invited'){
          $where[] = ['status',3];
        }
        if($tab =='wait'){
          $where[] = ['status',4];
        }

        $results = GuideInvite::where($where)

            ->orderby( $ops['sort'], $ops['dir'] )

            ->skip( ($ops['page']*$ops['limit'])-$ops['limit'])
            ->take( $ops['limit'] )

            ->paginate( $ops['limit'] );

        $res = [
            'options' => $ops,
            'total' => $results->total(),
            'data' => $results->items(),
        ];


        $res['code'] = 200;
        $res['info'] = 'Results successfully';
        $res['message'] = 'The request has succeeded.';

        // dd($res);
        $res['items'] = $this->ui->item('GuideInviteDatatable')->init( $res['data'], $res['options'] );

        return response()->json($res, 200);
    }

   
    
}
