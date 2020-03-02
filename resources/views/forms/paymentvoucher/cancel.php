<?php

$Fn = new Fn;

// $imageCoverOpt = array(
//     'name' => 'logo',
//     'width' => 150,
//     'height' => 150,

//     'dropzoneText' => 'โลโก้',

//     'cancelFileName' => 'logo_cancel_file'
// );


if( !empty($data) ){
    $formAction = '/cancelpaymentsvouchers/'.$data->id;
    // if(!empty($item['logo'])){
    //   $imageCoverOpt['src'] = asset("storage/{$item['logo']}");
    // }

    $arr['hiddenInput'][] = array('name'=>'id', 'value'=>$data->id);
    $arr['hiddenInput'][] = array('name'=>'_method', 'value'=>'PUT');
    $arr['hiddenInput'][] = array('name'=>'status', 'value'=>'2');

    $arr['title'] = 'ยกเลิกใบสำคัญจ่าย ';
    $arr['title'] .= '<div class="fsm text-muted" style="font-size:13px">'.

        // 'แก้ไขล่าสุด: '.$Fn->q('time')->live( $data->updated_at ).
        // 'เข้าใช้งานล่าสุด: '.( !empty($data->last_login_at) ? $Fn->q('time')->live( $data->last_login_at ): '-')  .

    '</div>';
}

$arr['hiddenInput'][] = array('name'=>'_token', 'value'=>csrf_token());


$form = new Form();
$formBasic = $form->create()
    // set From
    ->elem('div')
    ->addClass('form-insert')
    ->style('horizontal');

    $formBasic->field("remark")
        ->label( 'หมายเหตุ* :' )
        ->autocomplete('off')
        ->type( 'textarea')
        ->attr('rows', 3)
        ->attr('aria-label','required')
        ->addClass('form-control')
        ->value( !empty($data->remark)? $data->remark:'' );

$formBasic =  $formBasic->html();


# body
$arr['body'] = $formBasic;

$arr['form'] = '<form method="post" action="'.asset( $formAction ).'" data-plugin="formSubmit"></form>';


// $statusActive = !empty( $data->status )? $data->status: 1;
//
// $statusOps = '';
// foreach ($status as $key => $value) {
//
//
//     $active = $statusActive==$value['id']? ' selected="1"':'';
//     $statusOps .= '<option'.$active.' value="'.$value['id'].'">'.$value['name'].'</option>';
// }

# fotter: buttons
$arr['button'] = '<div class="d-flex justify-content-end">'.
    // '<select class="form-control input-group-text" name="status">'.$statusOps.'</select>'.
    '<button type="submit" class="btn btn-primary btn-submit ml-2"><span class="btn-text">บันทึก</span></button>'.
'</div>';

$arr['width'] = 500;

// return response()->json($arr, 404);

http_response_code(200);
echo json_encode($arr);
