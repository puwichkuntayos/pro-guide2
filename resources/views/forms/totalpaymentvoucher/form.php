<?php

$Fn = new Fn;

// $imageCoverOpt = array(
//     'name' => 'logo',
//     'width' => 150,
//     'height' => 150,

//     'dropzoneText' => 'โลโก้',

//     'cancelFileName' => 'logo_cancel_file'
// );

$n = !empty( $user )? $user[0]->name:'';
if( !empty($data) ){
    $formAction = '/totalpaymentvouchers/'.$data->id;
    // if(!empty($item['logo'])){
    //   $imageCoverOpt['src'] = asset("storage/{$item['logo']}");
    // }

    $arr['hiddenInput'][] = array('name'=>'id', 'value'=>$data->id);
    $arr['hiddenInput'][] = array('name'=>'_method', 'value'=>'PUT');

    $arr['title'] = 'ใบสำคัญจ่ายของ '.$n;
    $arr['title'] .= '<div class="fsm text-muted" style="font-size:13px">'.

        // 'แก้ไขล่าสุด: '.$Fn->q('time')->live( $data->updated_at ).
        // 'เข้าใช้งานล่าสุด: '.( !empty($data->last_login_at) ? $Fn->q('time')->live( $data->last_login_at ): '-')  .

    '</div>';
}
else{
    $formAction = '/totalpaymentvouchers';
    $arr['hiddenInput'][] = array('name'=>'_method', 'value'=>'post');
    $arr['title'] = 'ใบสำคัญจ่าย';
}

$arr['hiddenInput'][] = array('name'=>'_token', 'value'=>csrf_token());

$remark = '';
$note = '';
if(!empty($data)){
  if($data->status == 2){
    $remark = $data->remark;
  }else{
    $remark = $data->note;
  }
}

$conf = '';
if(!empty($data)){
  $conf = !empty($data->status)? 'disabled':'';
}

if(!empty( $data->status)){
  $status2 = (!empty( $data->status == 2 ))? 'checked':'';
  $status3 = (!empty( $data->status == 3 ))? 'checked':'checked';
}

$list='';

if (!empty($bill)){
  foreach ($bill as $key => $bi){
    $list.=
    '<tr id="row-details" class="row-detail">
      <td></td>
      <td><span class="no-detail spanM"></span></td>
      <td>
        <input name="input_id[]" class="default"  type="hidden" >
        <input name="bill[]"  type="text" class="form-control default detail-name" aria-label="required" '.$conf.' value="'. $bi->bill .'">
      </td>
      <td>
          <input name="price[]" type="text" class="form-control text-right num-cost" '.$conf.' value="'. $bi->price .'" aria-label="required">
      </td>
      <td class="td-action">
        <button  type="button"  id="btn-remove" class="btn btn-sm btn-danger btn-remove" '.$conf.'><i class="fa fa-remove"></i>
      </td>
    </tr>';
  }
}else{
  $list.=
  '<tr id="row-details" class="row-detail">
    <td></td>
    <td><span class="no-detail spanM"></span></td>
    <td>
      <input name="input_id[]" class="default"  type="hidden" >
      <input name="bill[]"  type="text" class="form-control default detail-name" '.$conf.' aria-label="required" value="">
    </td>
    <td>
        <input name="price[]" type="text" class="form-control text-right num-cost"'.$conf.'  value="0.00" aria-label="required">
    </td>
    <td class="td-action">
      <button  type="button"  id="btn-remove" class="btn btn-sm btn-danger btn-remove" '.$conf.'><i class="fa fa-remove"></i>
    </td>
  </tr>';
}

$banklist = '';
$bankid = !empty( $data->bank_id )? $data->bank_id:'1';
$bname = !empty( $data->bname )? $data->bname:'';
$account_number = !empty( $data->account_number )? $data->account_number:'';

foreach ($bank as $key => $val) {
  $active = $bankid==$val['id']? ' selected="1"':'';
  $banklist .= '<option '.$active.' value="'.$val->id.'">'.$val->bank_name.'</option>';
}

if(!empty( $data->category_id)){
  $category1 = (!empty( $data->category_id == 1 ))? 'checked':'';
  $category2 = (!empty( $data->category_id == 2 ))? 'checked':'';
}else{
  $category1 = 'checked';
  $category2 = '';
}

if(!empty( $data->type_id)){
  $typeid1 = (!empty( $data->type_id == 1 ))? 'checked':'';
  $typeid2 = (!empty( $data->type_id == 2 ))? 'checked':'';
}else{
  $typeid1 = 'checked';
  $typeid2 = '';
}

$form = new Form();
$formBasic = '  <div data-plugins="modal_paymentvoucher">
  <div class="row">
    <div class="col-md-2 mb-1">
      <label class="font-weight-bold">ประเภทใบสำคัญจ่าย :</label>
     </div>
    <div class="col-md-6 mb-1" >
      <div class="custom-control custom-radio custom-control-inline" style="margin-left:-16px;">
        <input type="radio" id="category1" name="category_id"  class="custom-control-input"  value="1" '.$category1.' '.$conf.'>
        <label class="custom-control-label" for="category1">ค่าเบ็ดเตล็ด</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline" style="margin-left:-16px;">
        <input type="radio" id="category2" name="category_id"  class="custom-control-input" value="2"  '.$category2.' '.$conf.'>
        <label class="custom-control-label" for="category2">ค่าจ้าง (หัก ณ ที่จ่าย 3%)</label>
      </div>
    </div>
    <div class="col-md-4 mb-1"></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-2 mb-1">
      <label class="font-weight-bold">สถานะการชำระเงิน :</label>
     </div>
    <div class="col-md-6 mb-1" >
      <div class="custom-control custom-radio custom-control-inline" style="margin-left:-16px;">
        <input type="radio" id="typeid1" name="type_id"  class="custom-control-input" value="1" '.$typeid1.' '.$conf.'>
        <label class="custom-control-label" for="typeid1">เงินโอน</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline" style="margin-left:-16px;">
        <input type="radio" id="typeid2" name="type_id"  class="custom-control-input" value="2"  '.$typeid2.' '.$conf.'>
        <label class="custom-control-label" for="typeid2">เงินสด</label>
      </div>
    </div>
    <div class="col-md-4 mb-1"></div>
  </div>
  <hr>
<div class="row">
  <div class="col-md-4 mb-3">
    <label>ชื่อบัญชี</label>
    <input type="text" class="form-control" name="bname" value="'.$bname.'" '.$conf.'>
  </div>
  <div class="col-md-4 mb-3">
    <label for="state">ชื่อธนาคาร</label>
    <select class="custom-select d-block w-100" name="bank_id" '.$conf.'>
    '.$banklist.'
    </select>
  </div>
  <div class="col-md-4 mb-3">
    <label >เลขบัญชีธนาคาร</label>
    <input type="number" class="form-control" name="account_number" value="'.$account_number.'" '.$conf.'>
  </div>
</div>
<hr>
<div class="row">
    <div class="col-10 text-center">
    <span class="alert-sms" style="font-size:20px;color:red;font-weight:bold"></span>
    </div>
    <div class="col-2 text-right">
        <button type="button" id="btn-add" class="btn btn-primary" '.$conf.'><i class="fa fa-plus-circle"></i> เพิ่มรายการ</button>
    </div>
  </div>
  <div class="row" style="margin-top:10px">
    <div class="col-12">


      <div class="row" style="margin-top:0px">
        <div class="col-12">
          <table class="table table-hover">
            <thead style="background-color:#E0E0E0">
                        <tr>
                            <th class="text-center" style="width:10px;"></th>
                            <th class="text-center" style="width:30px;">#</th>


                            <th class="text-center" style="width:75%;">รายการ</th>


                            <th class="text-center">จำนวนเงิน(บาท)</th>
                            <th></th>

                            </th>


                        </tr>
          </thead>
                <tbody id="showpay">
                '.$list.'
                </tbody>

              </table>
        </div>

      </div>


      <div class="row">
        <div class="col-8">

        </div>

        <div class="col-4">
          <div class="row">
            <div class="col-6">
              <span class="spanM font-weight-bold">จำนวนเงินรวมทั้งสิ้น :</span>
            </div>
            <div class="col-4 text-right">
              <input name="total" class="total_balance" type="hidden" >
              <span class="spanM balance">0.00</span>
            </div>
          </div>


          <div class="row d_fees">
              <div class="col-12">
          <hr>
                </div>
          </div>
          <div class="row d_fees">

          <div class="col-5 text-right ">
            <div class="input-group mb-3">
              <span class="spanM font-weight-bold"> หัก ณ ที่จ่าย :</span>
            </div>
          </div>
          <div class="col-2 ">
          </div>
          <div class="col-2 ">
            <input class="form-control text-right show-tax default-num" type="text" id="input_tax" name="input_tax" style="height:35px;width:70px;" value="3" placeholder="3" readonly>
          </div>
          <div class="col-1">
          <span class="spanM"> &nbsp;%</span>
          </div>



        </div>

        <div class="row show-tax d_fees" >

        <div class="col-5">

            <span class="spanM font-weight-bold">หักภาษี ณ ที่จ่าย :</span>

        </div>
        <div class="col-2 ">
        </div>
        <div class="col-2 text-right">
            <span  id="amount_tax3"  class="spanM">0.00</span>
        </div>
        <div class="col-1">

        </div>


        </div>

        <div class="row show-tax d_fees" style="margin-top:10px;">

        <div class="col-5">

            <span  class="spanM font-weight-bold">ยอดที่ต้องได้รับ :</span>

        </div>
        <div class="col-2 ">
        </div>
        <div class="col-2 text-right">

            <span id="balance_tax3" class="spanM">0.00</span>
        </div>
        <div class="col-1">

        </div>


        </div>



        </div>
      </div>


      <div class="row">
        <div class="col-12">
            <span class="spanM font-weight-bold" >หมายเหตุ :</span>
        </div>
      </div>

      <div class="row">
        <div class="controls col-12 mb-1">
          <textarea id="input_remark"  class="form-control" name="note" '.$conf.'>'.$remark.'</textarea>
          <div class="notification"></div>
        </div>
      </div>
    </div>
  </div>
</div>

  ';



# body
$arr['body'] = $formBasic;

$arr['form'] = '<form method="post" action="'.asset( $formAction ).'" data-plugins="formSubmit"></form>';

// $statusActive = !empty( $data->status )? $data->status:'1';
// $conf = '';
// $pay = '';
// if(!empty($data)){
//   $conf = !empty($data->status == 4)? "disabled":'';
//   $pay = !empty($data->status == 4)? "d-none":'';
// }

// $status = '';
// $statusList = array();
// $statusList[] = array('id'=>1, 'name'=>'รอการตรวจสอบ');

//   $statusList[] = array('id'=>2, 'name'=>'ยกเลิก');
// $statusList[] = array('id'=>3, 'name'=>'อนุมัติเรียบร้อย');
// $statusList[] = array('id'=>4, 'name'=>'จ่ายแล้ว');
//
//
//
// $statusOps = '';
// foreach ($statusList as $key => $value) {
//     $active = $statusActive==$value['id']? ' selected="1"':'';
//     $statusOps .= '<option'.$active.' value="'.$value['id'].'">'.$value['name'].'</option>';
// }
if(!empty($data)){
  $btn = !empty($data->status)? '<br>':'';
  // $btn = !empty($data->status !== 2)? '':'<br>';
}
# fotter: buttons
$arr['button'] =     '<div class="d-flex justify-content-end">'.
      // '<select class="form-control input-group-text" name="status">'.$statusOps.'</select>'.

    $btn.
'</div>';

$arr['width'] = 1300;

// return response()->json($arr, 404);

http_response_code(200);
echo json_encode($arr);
