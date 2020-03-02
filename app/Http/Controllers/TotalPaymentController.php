<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;
use PDF;
use App\Models\BillModel;
use App\Models\BillPayModel;
use App\Models\PaymentVoucherModel;
use App\Models\BankModel;
use App\Models\User;
use App\Models\PaymentVoucherModel as MDB;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\ApproveMail;
use App\Mail\NotApproveMail;


class TotalPaymentController extends Controller
{
  public function index(Request $request)
  {
      $tab = basename(Route::getFacadeRoot()->current()->uri);

      $tabs = [
          'totalpayments' => [
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
          $ops['url'] = '/totalpayments/find/'.$tab;

          return view('pages.totalpayment.index')->with( TotalPaymentController::_init( $request, $ops ) );
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

          'navleft' => TotalPaymentController::_leftMenu($request),

          'datatable' => [
              'title' => isset($ops['title'])? $ops['title']: 'ตะกร้า',

              'options' => [
                  'limit' => 24
              ],
              "url" => $ops['url'],

              'filters' => TotalPaymentController::_filters( $ops ),
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
                      "id"=> "/totalpayments",
                      "name" => "ทั้งหมด",
                      'count' => PaymentVoucherModel::count()
                  ],
                  [
                      "id"=> "/totalpayments/checkup",
                      "name" => "รอการตรวจสอบ",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 1],
                                // ['company_id', $request->user()->company->id]
                            ])
                            ->count()
                  ],
                  [
                      "id"=> "/totalpayments/confirm",
                      "name" => "อนุมัติเรียบร้อย",
                      'count' => PaymentVoucherModel::
                            where([
                                ['status', 3],
                                // ['company_id', $request->user()->company->id]
                            ])
                            ->count()
                  ],
                  // [
                  //     "id"=> "/totalpayments/pay",
                  //     "name" => "จ่ายแล้ว",
                  //     'count' => PaymentVoucherModel::
                  //           where([
                  //               ['status', 4],
                  //               // ['company_id', $request->user()->company->id]
                  //           ])
                  //           ->count()
                  // ],
                  [
                      "id"=> "/totalpayments/cancel",
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

     // $e_date = $data->created_at + date('Y-m-d', strtotime(date('Y-m-d'). ' + 7 days'));
     // $a = $data->created_at + $e_date;

     // dd($a);
     // if($tab =='pay'){
     //   $where[] = ['status',4];
     // }
// ->where('status','!=',2)
     $sth = PaymentVoucherModel::where($where);
     // $sth->whereBetween('created_at',[date('Y-m-d'),$e_date]);

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
     $res['items'] = $this->ui->item('TotalPaymentDatatable')->init($res['data'], $res['options']);

     return response()->json($res, 200);
  }

  public function pdf()
    {
      $data = DB::table('users')->get();
      $pdf = PDF::loadView('pdf',['data'=> $data]);
      return @$pdf->stream();
    }

    public function pdf_totalpayments($id)
    {
      $data = DB::table('detail_bill')
      ->join('_bill','_bill.detail_id','=','detail_bill.id')
      ->join('bank','bank.id','=','detail_bill.bank_id')
      ->leftjoin('users','users.id','=','detail_bill.user_id')
      ->where('detail_bill.id','=',$id)
      ->get();
      $pay = BillPayModel::where('detail_id',$id)->get();
      $date = date('d/m/Y');

      // dd($data);
      $pdf = PDF::loadView('forms.paymentvoucher.totalpayments',['data'=> $data,'date'=>$date,'pay'=>$pay])->setPaper('a5', 'landscape');
      return @$pdf->stream();
    }

    // public function pdf_percentpdf($id)
    // {
    //   $data = DB::table('detail_bill')
    //   ->join('_bill','_bill.detail_id','=','detail_bill.id')
    //   ->leftjoin('users','users.id','=','detail_bill.user_id')
    //   ->where('detail_bill.id','=',$id)
    //   ->get();
    //   // $date = date('d/m/Y');
    //   $acc = Auth::user();
    //   $ldate = date('d/m/Y');
    //   $pdf = PDF::loadView('forms.paymentvoucher.percentpdfa3',['data'=> $data,'ldate'=>$ldate,'acc'=>$acc])->setPaper('a3');
    //   return @$pdf->stream();
    // }

    public function edit(MDB $db,$id)
    {

      // $uid = Auth::user()->id;
      // dd($uid);
      $data = PaymentVoucherModel::findOrFail($id);
      $user = DB::table('detail_bill')->join('users','users.id','=','detail_bill.user_id')->where('detail_bill.id','=',$id)->get();

      // $user = User::get();
      $bank = BankModel::get();
      $bill = BillModel::where('detail_id', $id)->get();
      // dd($user);
      return view('forms.paymentvoucher.formaccount')->with([
          'data' => $data,
          'bill' => $bill,
          'bank' => $bank,
          'user' => $user,

      ]);
    }

    public function update(Request $request, $id)
    {
      $paymentno = $this->no();

      // dd($request->input());
      $data = PaymentVoucherModel::findOrFail($request->id);
      $data->user_edit = Auth::user()->id;
      $tax =  ($request->total*3)/100;
      $totaltax = $request->total-$tax;
      $user = DB::table('detail_bill')->join('users','users.id','=','detail_bill.user_id')->where('detail_bill.id','=',$id)->get();

      foreach ($user as $key => $value) {
        $email = $value->email;
        $name = $value->name;
      }
      // $mail = $user->email;
      // dd($name);



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

            if(!empty($data->status == 3)){
              $pay = new BillPayModel;
              $pay->user_id = Auth::user()->id;
              $pay->detail_id = $data->id;
                          // $data->no = $paymentno;
              $pay->save();
            }

            if(!empty($data->status == 3)){
                $data->no = $paymentno;
              $data->save();
            }

            if(!empty($data->status == 3)){
              // send mail
              Mail::to( $email )->send( new ApproveMail
                ([
                    'name' => $name,
                    // 'message' => $request->remake,
                    'id' => $data->id
                ])
              );
            }

            if(!empty($data->status == 2)){
              // send mail
              Mail::to( $email )->send( new NotApproveMail
                ([
                    'name' => $name,
                    'message' => $data->remark,
                    'id' => $data->id
                ])
              );
            }



              $arr['code'] = 200;
              $arr['alert'] = [
                  'icon'=> 'success',
                  'title'=>'บันทึกข้อมูลเรียบร้อย!',
                  'text' => 'กรุณากดปุ่มเพื่อปิด!'
              ];

              $arr['redirect'] = asset('/totalpayments');
        } else {
            $arr['code'] = 422;
            $arr['message'] = 'บันทึกข้อมูลล้มเหล่ว, กรุณาลองใหม่';
        }
        return response()
            ->json($arr, $arr['code'])
            ->header('Content-Type', 'application/json');
        // return redirect('/tickets/quatations');
    }

    public static function Convert($amount_number)
    {
        $amount_number = number_format($amount_number, 2, ".", "");
        $pt = strpos($amount_number, ".");
        $number = $fraction = "";
        if ($pt === false)
            $number = $amount_number;
        else {
            $number = substr($amount_number, 0, $pt);
            $fraction = substr($amount_number, $pt + 1);
        }

        $ret = "";

        $baht =  TotalPaymentController::ReadNumber($number);
        if ($baht != "")
            $ret .= $baht . "บาท";

        $satang = TotalPaymentController::ReadNumber($fraction);
        if ($satang != "")
            $ret .=  $satang . "สตางค์";
        else
            $ret .= "ถ้วน";
        return $ret;
    }

    public static function ReadNumber($number)
    {
        $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
        $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
        $number = $number + 0;
        $ret = "";
        if ($number == 0) return $ret;
        if ($number > 1000000) {
            $ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";
            $number = intval(fmod($number, 1000000));
        }

        $divider = 100000;
        $pos = 0;
        while ($number > 0) {
            $d = intval($number / $divider);
            $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" : ((($divider == 10) && ($d == 1)) ? "" : ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
            $ret .= ($d ? $position_call[$pos] : "");
            $number = $number % $divider;
            $divider = $divider / 10;
            $pos++;
        }
        return $ret;
    }

    public function no()
    {
        $pay = BillPayModel::count();
        // dd($pay);
        if($pay==0){
          $pay = 1;
        }else if($pay !== 0){
          $pay = 1 + $pay;
        }
        $qua = PaymentVoucherModel::whereMonth('created_at', date('m'))->orderby('created_at', 'desc')->first();
        $no_sub = (int) substr($qua->no,3) + $pay;
        // dd($qua);
        // $run_no = 'TI' . date('m') . substr(date('Y'), 2) . sprintf("%03d", $no_sub);
        $run_no = sprintf("%03d", $no_sub).'-'.date('m');
        // dd($run_no);
        return $run_no;
    }

}
