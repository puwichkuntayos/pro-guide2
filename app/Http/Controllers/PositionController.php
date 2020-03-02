<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PositionModel as MDB;

class PositionController extends Controller
{

    public function index(Request $request)
    {
        $tab = basename(Route::getFacadeRoot()->current()->uri);
     
        $tabs = [
            'positions' => [
                'title' => 'ทั้งหมด',
            ],
            'confirm' => [
                'title' => 'ยืนยันแล้ว',
            ],
            'verify' => [
                'title' => 'รอตรวจสอบ',
            ],
            'invited' => [
                'title' => 'กำลังเชิญ',
            ],
            'cancel' => [
                'title' => 'ปฎิเสธ',
            ],
            'exp' => [
                'title' => 'หมดอายุ',
            ],
           
        ];

        if( in_array($tab, array_keys($tabs)) ){

            $ops = $tabs[$tab];
            $ops['url'] = '/position/find/?tab='.$tab;

            return view('forms.positions.index')->with( PositionController::_init( $request, $ops ) );
        }
        else{
            
            throw new AuthorizationException('You do not have permission to view this page');
        }
    }
        
    public function show($id)
    {
        // $data = GuideInvite::findOrFail( $id );

        // // dd($data->register);
        // return view('pages.guide.detail', compact('data'));
    }

  

    // set Datatable
    public static function _init ($request, $ops=[] )
    {
        return [
            'title' => '',

            'navleft' => PositionController::_leftMenu($request),

            'datatable' => [
                'title' => isset($ops['title'])? $ops['title']: 'ตะกร้า',

                'options' => [
                    'limit' => 24
                ],
                "url" => $ops['url'],

                'filters' => PositionController::_filters( $ops ),
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
                        "id"=> "/positions",
                        "name" => "แผนกทั้งหมด"
                        
                        
                    ],
                    [
                        "id"=> "/positions/confirm",
                        "name" => "Sales",
                        "active"=> 1,
                       
                    ],
                    [
                        "id"=> "/positions/verify",
                        "name" => "IT(Information Technology)",
                        "active"=> 2,
                       
                    ],
                    [
                        "id"=> "/positions/invited",
                        "name" => "การเงิน",
                        "active"=> 3,
                       
                    ],

                    [
                        "id"=> "/positions/invited",
                        "name" => "บัญชี",
                        "active"=> 4,
                       
                    ],
                    [
                        "id"=> "/positions/invited",
                        "name" => "ผู้บริกหาร",
                        "active"=> 5,
                       
                    ],
                    [
                        "id"=> "/positions/confirm",
                        "name" => "Operation",
                        "active"=> 6,
                       
                    ],
                   
                

                ]
            ],

            [
                "items" => [
                    [
                        "id"=> "/positions/cancel",
                        "name" => "ไกด์",
                        "active"=> 0,
                        
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
        $filters[] = [ 'position' => 'topLeft', 'type' => 'selectbox', 'items'=> array_merge([['id'=>'', 'name'=>'ทั้งหมด']], ), 'name' => 'status'];

        // : searchbox ค้นหา
        $filters[] = [ 'position' => 'topLeft', 'type' => 'searchbox', 'name' => 'q',];


        $filters[] = [
            'position' => 'topRight',
            'type' => 'link',

            'style' => 'primary',

            'url' => '/position/index',

            'attr' => [
                'data-plugin' => 'lightbox'
            ],

            'label' => '<i class="fa fa-envelope-o"></i><span class="ml-1">เชิญไกด์</span>'
        ];


        return $filters;
    }



    public function find(Request $request)
    {
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

    

        $res['code'] = 200;
        $res['info'] = 'Results successfully';
        $res['message'] = 'The request has succeeded.';

        // dd($res);
        // $res['items'] = $this->ui->item('GuideInviteDatatable')->init( $res['data'], $res['options'] );

        return response()->json($res, 200);
    }
}
