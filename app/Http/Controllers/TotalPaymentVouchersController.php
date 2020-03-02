<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\BillModel;
use App\Models\PaymentVoucherModel;
use App\Models\BankModel;
use App\Models\PaymentVoucherModel as MDB;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class TotalPaymentVouchersController extends Controller
{
  public function index(Request $request)
  {
      $tab = basename(Route::getFacadeRoot()->current()->uri);

      $tabs = [
          'totalpaymentvouchers' => [
              'title' => 'ทั้งหมด',
          ],
          'checkup' => [
              'title' => 'รอการตรวจสอบ',
              'options'=>[
					           'status'=> 1
				               ]
          ],
          'confirm' => [
              'title' => 'อนุมัติเรียบร้อย',
              'options'=>[
					           'status'=> 3
				               ]
          ],
          // 'pay' => [
          //     'title' => 'จ่ายแล้ว',
          //     'options'=>[
					//            'status'=> 4
				  //              ]
          // ],
          'cancel' => [
              'title' => 'ยกเลิก',
              'options'=>[
					           'status'=> 2
				               ]
          ],

      ];

      if( in_array($tab, array_keys($tabs)) ){
        // dd($tab);
          $ops = $tabs[$tab];
          $ops['url'] = '/totalpaymentvouchers/find/'.$tab;

          return view('pages.totalpaymentvoucher.index')->with( TotalPaymentVouchersController::_init( $request, $ops ) );
      }
      else{

          throw new AuthorizationException('You do not have permission to view this page');
      }

  }
  public function show(){

  }
  // set Datatable
  public static function _init ($request, $ops=[] )
  {
      return [
          'title' => '',

          'navleft' => TotalPaymentVouchersController::_leftMenu($request),

          'datatable' => [
              'title' => isset($ops['title'])? $ops['title']: 'ตะกร้า',

              'options' => [
                  'limit' => 24
              ],
              "url" => $ops['url'],

              'filters' => TotalPaymentVouchersController::_filters( $ops ),
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
                      "id"=> "/totalpaymentvouchers",
                      "name" => "ทั้งหมด",
                      'count' => PaymentVoucherModel::count()
                  ],
                  [
                      "id"=> "/totalpaymentvouchers/checkup",
                      "name" => "รอการตรวจสอบ",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 1],
                                // ['company_id', $request->user()->company->id]
                            ])
                            ->count()
                  ],
                  [
                      "id"=> "/totalpaymentvouchers/confirm",
                      "name" => "อนุมัติเรียบร้อย",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 3],
                                // ['company_id', $request->user()->company->id]
                            ])
                            ->count()
                  ],
                  // [
                  //     "id"=> "/totalpaymentvouchers/pay",
                  //     "name" => "จ่ายแล้ว",
                  //     'count' => PaymentVoucherModel::
                  //           where([
                  //               ['status', 4],
                  //               // ['company_id', $request->user()->company->id]
                  //           ])
                  //           ->count()
                  // ],
                  [
                      "id"=> "/totalpaymentvouchers/cancel",
                      "name" => "ยกเลิก",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 2],
                                // ['company_id', $request->user()->company->id]
                            ])
                            ->count()
                      // "active"=> 2,
                  ],
              ]
          ],
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
      // $filters[] = [ 'position' => 'topLeft', 'type' => 'selectbox', 'items'=> array_merge([['id'=>'', 'name'=>'ทั้งหมด']], Guide::status()), 'name' => 'status'];

      // : searchbox ค้นหา
      $filters[] = [ 'position' => 'topLeft', 'type' => 'searchbox', 'name' => 'q',];

      return $filters;
  }


  public function find(Request $request,$tab='')
  {
    // dd($tab);
     $ops = [
         'sort' => isset($request->sort) ? $request->sort : 'created_at',
         'dir' => isset($request->dir) ? $request->dir : 'desc',

         'limit' => isset($request->limit) ? $request->limit : 1,
         'page' => isset($request->page) ? $request->page : 1,

         'ts' =>  isset($request->ts) ? $request->ts : time(),
     ];

     $where = [];

     if ($request->has('status')) {
         if ($request->status != '') {
             $where[] = ['status', $request->status];
         }
     }

     if($tab =='checkup'){
       $where[] = ['status',1];
     }

     if($tab =='confirm'){
       $where[] = ['status',3];
     }

     if($tab =='cancel'){
       $where[] = ['status',2];
     }
     // if($tab =='pay'){
     //   $where[] = ['status',4];
     // }
// ->where('status','!=',2)
     $sth = PaymentVoucherModel::where($where);

     $sth->orderby($ops['sort'], $ops['dir']);
     $sth->skip(($ops['page'] * $ops['limit']) - $ops['limit']);
     $sth->take($ops['limit']);

     $results =  $sth->paginate($ops['limit']);

     $res = [
         'options' => $ops,
         'total' => $results->total(),
         'data' => $results->items(),
     ];

     $res['code'] = 200;
     $res['info'] = 'Results successfully';
     $res['message'] = 'The request has succeeded.';

     // dd($res);
     $res['items'] = $this->ui->item('TotalPaymentVouchersDatatable')->init($res['data'], $res['options']);

     return response()->json($res, 200);
  }

  public function edit(MDB $db,$id)
  {
    $bank = BankModel::get();
    $data = PaymentVoucherModel::findOrFail($id);
    // $bill = BillModel
    $bill = BillModel::where('detail_id', $id)->get();
    // dd(bill);
    $user = DB::table('detail_bill')->join('users','users.id','=','detail_bill.user_id')->where('detail_bill.id','=',$id)->get();

    return view('forms.totalpaymentvoucher.form')->with([
        'data' => $data,
        'bill' => $bill,
        'bank' => $bank,
        'user' => $user,
        // 'status' => $db->status(),

    ]);
  }
}
