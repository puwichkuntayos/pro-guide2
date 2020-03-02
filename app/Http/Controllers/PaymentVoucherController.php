<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaymentVoucherRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;
use PDF;
use App\Models\BillModel;
use App\Models\PaymentVoucherModel;
use App\Models\PaymentVoucherModel as MDB;
use App\Models\BillPayModel;
use App\Models\BankModel;
use App\Models\User;

use App\Mail\VoucherMail;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class PaymentVoucherController extends Controller
{
  public function index(Request $request)
  {
      $tab = basename(Route::getFacadeRoot()->current()->uri);

      $tabs = [
          'paymentvouchers' => [
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
          $ops['url'] = '/paymentvouchers/find/'.$tab;

          return view('pages.paymentvoucher.index')->with( PaymentVoucherController::_init( $request, $ops ) );
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

          'navleft' => PaymentVoucherController::_leftMenu($request),

          'datatable' => [
              'title' => isset($ops['title'])? $ops['title']: 'ตะกร้า',

              'options' => [
                  'limit' => 24
              ],
              "url" => $ops['url'],

              'filters' => PaymentVoucherController::_filters( $ops ),
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
                      "id"=> "/paymentvouchers",
                      "name" => "ทั้งหมด",
                      'count' => PaymentVoucherModel::where([
                          ['user_id', $request->user()->id],
                      ])
                      ->count()
                  ],
                  [
                      "id"=> "/paymentvouchers/checkup",
                      "name" => "รอการตรวจสอบ",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 1],
                                ['user_id', $request->user()->id],
                            ])
                            ->count()
                  ],
                  [
                      "id"=> "/paymentvouchers/confirm",
                      "name" => "อนุมัติเรียบร้อย",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 3],
                                ['user_id', $request->user()->id],
                            ])
                            ->count()
                  ],
                  // [
                  //     "id"=> "/paymentvouchers/pay",
                  //     "name" => "จ่ายแล้ว",
                  //     'count' => PaymentVoucherModel::
                  //           where([
                  //               ['status', 4],
                  //               ['user_id', $request->user()->id],
                  //           ])
                  //           ->count()
                  // ],
                  [
                      "id"=> "/paymentvouchers/cancel",
                      "name" => "ยกเลิก",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 2],
                                ['user_id', $request->user()->id],
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

      $filters[] = [
           'position' => 'topRight',
           'type' => 'button',

           'style' => 'primary',

           'attr' => [
               'data-plugin' => "lightbox",
               'data-url' => '/paymentvouchers/create',
           ],

           'label' => '<svg class="svg-icon o__tiny o__by-text" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><path d="M2 5v2h3v3h2V7h3V5H7V2H5v3H2z"></path></svg> <span>เพิ่มใบสำคัญจ่าย</span>'
       ];
      // selectbox
      // $filters[] = [ 'position' => 'topLeft', 'type' => 'selectbox', 'items'=> array_merge([['id'=>'', 'name'=>'ทั้งหมด']], Guide::status()), 'name' => 'status'];

      // : searchbox ค้นหา
      $filters[] = [ 'position' => 'topLeft', 'type' => 'searchbox', 'name' => 'q',];

      return $filters;
  }


    public function find(Request $request,$tab='')
    {
      // dd($request);
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

       $uid = Auth::user()->id;
       $sth = PaymentVoucherModel::where($where)->where('user_id', $uid);
       // dd($sth);
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
       $res['items'] = $this->ui->item('PaymentVoucherDatatable')->init($res['data'], $res['options']);

       return response()->json($res, 200);
    }

    public function create(MDB $db)
    {

      $bank = BankModel::get();
      // dd($bank);
        return view('forms.paymentvoucher.form')
        ->with([
            'bank' => $bank,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentVoucherRequest $request)
    {
        // dd($request->input());
        $arr = [];

        $tax =  ($request->total*3)/100;
        $totaltax = $request->total-$tax;

        $data = new PaymentVoucherModel;
        $mail = User::where('role_id', 2)->get();
        
        foreach ($mail as $key => $value) {
          $email = $value->email;
        }

        // dd($email);
        if( $data->fill( $request->input() )->save() ){

            $data->user_id = Auth::user()->id;
            $data->type_id = 1;
            $data->status = 1;
            if($data->category_id == 1){
              $data->input_tax = 0;
            }

            if($data->category_id == 2){
              $data->total = $totaltax;
            }
            // dd($data);
            $data->update();

            foreach ($request->price as $key => $value) {

                $bi = new BillModel;
                $bi->bill  = $request->bill[$key];
                $bi->price  = $request->price[$key];
                $bi->detail_id  = $data->id;
                $bi->save();
            }

            // send mail
            Mail::to( $email )->send( new VoucherMail
              ([
                  // 'name' => $request->name,
                  // 'message' => $request->remake,
                  'id' => $data->id
              ])
            );

            $arr['code'] = 200;
              $arr['alert'] = [
                  'icon'=> 'success',
                  'title'=>'บันทึกข้อมูลเรียบร้อย!',
                  'text' => 'กรุณากดปุ่มเพื่อปิด!'
              ];

              $arr['redirect'] = asset('/paymentvouchers');
        }
        else{
            $arr['code'] = 422;
            $arr['message'] = 'บันทึกข้อมูลล้มเหล่ว, กรุณาลองใหม่';
        }

        return response()
            ->json($arr, $arr['code'])
            ->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MDB $db,$id)
    {
      $bank = BankModel::get();
      // $uid = Auth::user()->id;
      // dd($uid);
      $data = PaymentVoucherModel::findOrFail($id);
      // $bill = BillModel
      $bill = BillModel::where('detail_id', $id)->get();
      // dd(bill);
      return view('forms.paymentvoucher.form')->with([
          'data' => $data,
          'bill' => $bill,
          'bank' => $bank,

      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // dd($request->input());
      $data = PaymentVoucherModel::findOrFail($request->id);
      $data->user_edit = Auth::user()->id;
      $tax =  ($request->total*3)/100;
      $totaltax = $request->total-$tax;


        if ($data->fill($request->all())->save()) {

          if($data->category_id == 1){
            $data->input_tax = 0;
          }
          if($data->category_id == 2){
            $data->total = $totaltax;
          }
          $data->update();

            if (!empty($request->bill)) {
                $results =  BillModel::select('detail_id')->where('detail_id', $id)->get();
            }

            if (isset($results)) {
                BillModel::where('detail_id', $id)->delete();
            }

            foreach ($request->price as $key => $value) {
                $bi = new BillModel;
                $bi->bill  = $request->bill[$key];
                $bi->price  = $request->price[$key];
                $bi->detail_id  = $data->id;
                $bi->save();
            }


            if(Auth::user()->role_id == 1){
              $arr['code'] = 200;
                $arr['alert'] = [
                    'icon'=> 'success',
                    'title'=>'บันทึกข้อมูลเรียบร้อย!',
                    'text' => 'กรุณากดปุ่มเพื่อปิด!'
                ];

                $arr['redirect'] = asset('/paymentvouchers');

            }

            if(Auth::user()->role_id == 3){
              $arr['code'] = 200;
              $arr['alert'] = [
                  'icon'=> 'success',
                  'title'=>'บันทึกข้อมูลเรียบร้อย!',
                  'text' => 'กรุณากดปุ่มเพื่อปิด!'
              ];

              $arr['redirect'] = asset('/paymentvouchers');
            }

            if (Auth::user()->role_id == 4) {
              $arr['code'] = 200;
              $arr['alert'] = [
                  'icon'=> 'success',
                  'title'=>'บันทึกข้อมูลเรียบร้อย!',
                  'text' => 'กรุณากดปุ่มเพื่อปิด!'
              ];

              $arr['redirect'] = asset('/paymentvouchers');
            }

        } else {
            $arr['code'] = 422;
            $arr['message'] = 'บันทึกข้อมูลล้มเหล่ว, กรุณาลองใหม่';
        }
        return response()
            ->json($arr, $arr['code'])
            ->header('Content-Type', 'application/json');
        // return redirect('/tickets/quatations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cancelpayments(MDB $db,$id)
    {
      $bank = BankModel::get();
      // $uid = Auth::user()->id;
      // dd($uid);
      $data = PaymentVoucherModel::findOrFail($id);
      // $bill = BillModel
      $bill = BillModel::where('detail_id', $id)->get();
      // dd(bill);
      return view('forms.paymentvoucher.cancel')->with([
          'data' => $data,
          'bill' => $bill,
          'bank' => $bank,

      ]);
    }

    public function cancelpaymentsvouchers(Request $request, $id)
    {
      // dd($request->input());
      $data = PaymentVoucherModel::findOrFail($request->id);



        if ($data->fill($request->all())->save()) {

            if(Auth::user()->role_id == 1){
              $arr['code'] = 200;
                $arr['alert'] = [
                    'icon'=> 'success',
                    'title'=>'บันทึกข้อมูลเรียบร้อย!',
                    'text' => 'กรุณากดปุ่มเพื่อปิด!'
                ];

                $arr['redirect'] = asset('/paymentvouchers');

            }

            if(Auth::user()->role_id == 3){
              $arr['code'] = 200;
              $arr['alert'] = [
                  'icon'=> 'success',
                  'title'=>'บันทึกข้อมูลเรียบร้อย!',
                  'text' => 'กรุณากดปุ่มเพื่อปิด!'
              ];

              $arr['redirect'] = asset('/paymentvouchers');
            }

            if (Auth::user()->role_id == 4) {
              $arr['code'] = 200;
              $arr['alert'] = [
                  'icon'=> 'success',
                  'title'=>'บันทึกข้อมูลเรียบร้อย!',
                  'text' => 'กรุณากดปุ่มเพื่อปิด!'
              ];

              $arr['redirect'] = asset('/paymentvouchers');
            }

        } else {
            $arr['code'] = 422;
            $arr['message'] = 'บันทึกข้อมูลล้มเหล่ว, กรุณาลองใหม่';
        }
        return response()
            ->json($arr, $arr['code'])
            ->header('Content-Type', 'application/json');
        // return redirect('/tickets/quatations');
    }

    // public function pdf()
    //   {
    //     $data = DB::table('users')->get();
    //     $pdf = PDF::loadView('pdf',['data'=> $data]);
    //     return @$pdf->stream();
    //   }
    //
    //   public function pdf_totalpayments($id)
    //   {
    //     $data = DB::table('detail_bill')
    //     ->join('_bill','_bill.detail_id','=','detail_bill.id')
    //     ->leftjoin('users','users.id','=','detail_bill.user_id')
    //     ->where('detail_bill.id','=',$id)
    //     ->get();
    //     dd($id);
    //
    //     $pay = BillPayModel::where('detail_id',$id)->get();
    //     $date = date('d/m/Y');
    //     $pdf = PDF::loadView('forms.paymentvoucher.totalpayments',['data'=> $data,'date'=>$date,'pay'=>$pay])->setPaper('a5', 'landscape');
    //     return @$pdf->stream();
    //   }
}
