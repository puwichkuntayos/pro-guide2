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
    $formAction = '/api/v1/users/'.$data->id;
    // if(!empty($item['logo'])){
    //   $imageCoverOpt['src'] = asset("storage/{$item['logo']}");
    // }

    $arr['hiddenInput'][] = array('name'=>'id', 'value'=>$data->id);
    $arr['hiddenInput'][] = array('name'=>'_method', 'value'=>'PUT');

    $arr['title'] = ' ';
    $arr['title'] .= '<div class="fsm text-muted" style="font-size:13px">'.
        
        // 'แก้ไขล่าสุด: '.$Fn->q('time')->live( $data->updated_at ).
        'เข้าใช้งานล่าสุด: '.( !empty($data->last_login_at) ? $Fn->q('time')->live( $data->last_login_at ): '-')  .
        
    '</div>';
}
else{
    $formAction = '/api/v1/users';
    $arr['hiddenInput'][] = array('name'=>'_method', 'value'=>'post');
    $arr['title'] = 'เพิ่มผู้ใช้งาน';
}

$arr['hiddenInput'][] = array('name'=>'_token', 'value'=>csrf_token());


$form = new Form();
$formBasic = $form->create()
    // set From
    ->elem('div')
    ->addClass('form-insert')
    ->style('horizontal');

    $formBasic->hr('<div class="ui-hr-text white"><span>Account</span></div>');
    

    $formBasic->field("role_id")
        ->label( 'บทบาท*' )
        ->autocomplete('off')
        ->attr('aria-label', 'required')
        ->addClass('form-control input-role')
        ->select( $roles )
        ->value( !empty($data->role_id)? $data->role_id:'' );


    $formBasic->field("username")
            ->label( 'Username*')
            ->autocomplete('off')
            ->addClass('form-control')
            ->attr('aria-label', 'required')
            ->value( !empty($data->username)? $data->username:'' );
    
if( empty($data) ){
    $formBasic->field("password")
            ->label( 'password*' )
            ->autocomplete('off')
            ->addClass('form-control input-password')
            ->type('password')
            ->attr('aria-label', 'required')
            ->note( '<button type="button" class="show-password-toggle"><svg viewBox="0 0 36 36" focusable="false" aria-hidden="true" role="img"><path d="M14.573 9.44A9.215 9.215 0 0 1 26.56 21.427l2.945 2.945c2.595-2.189 4.245-4.612 4.245-6.012 0-2.364-4.214-7.341-9.137-9.78A14.972 14.972 0 0 0 18 6.937a14.36 14.36 0 0 0-4.989.941z"></path><path d="M33.794 32.058L22.328 20.592A5.022 5.022 0 0 0 23.062 18a4.712 4.712 0 0 0-.174-1.2 2.625 2.625 0 0 1-2.221 1.278A2.667 2.667 0 0 1 18 15.417a2.632 2.632 0 0 1 1.35-2.27 4.945 4.945 0 0 0-1.35-.209 5.022 5.022 0 0 0-2.592.734L3.942 2.206a.819.819 0 0 0-1.157 0l-.578.579a.817.817 0 0 0 0 1.157l6.346 6.346c-3.816 2.74-6.3 6.418-6.3 8.072 0 3 7.458 10.7 15.686 10.7a16.455 16.455 0 0 0 7.444-1.948l6.679 6.679a.817.817 0 0 0 1.157 0l.578-.578a.818.818 0 0 0-.003-1.155zM18 27.225a9.2 9.2 0 0 1-7.321-14.811l2.994 2.994A5.008 5.008 0 0 0 12.938 18 5.062 5.062 0 0 0 18 23.063a5.009 5.009 0 0 0 2.592-.736l2.994 2.994A9.144 9.144 0 0 1 18 27.225z"></path></svg></button>' );
}

$formBasic->hr('<div class="ui-hr-text white"><span>Basic</span></div>')

//    ->field($imageCoverOpt['name'])
//         ->label('โลโก้')
//         ->text( '<div style="width: 150px">'.$Fn->q('form')->imageCover( $imageCoverOpt ).'</div>' )



->field("name")
        ->label( 'ชื่อ*' )
        ->autocomplete('off')
        ->addClass('form-control')
        ->maxlength(175)
        ->attr('aria-label', 'required')
        ->value( !empty($data->name)? $data->name:'' )


 ->field("email")
        ->label( 'อีเมล*' )
        ->autocomplete('off')
        ->addClass('form-control')
        ->value( !empty($data->email)? $data->email:'' )
        ->attr('aria-label', 'required')

 ->field("phone")
        ->label( 'โทรศัพท์' )
        ->autocomplete('off')
        ->addClass('form-control')
        ->value( !empty($data->phone)? $data->phone:'' )

 ->field("line")
        ->label( 'ไลน์' )
        ->autocomplete('off')
        ->addClass('form-control')
        ->value( !empty($data->line)? $data->line:'' )

->field("personal_id")
        ->label( 'รหัสบัตรประชาชน' )
        ->autocomplete('off')
        ->addClass('form-control')
        ->value( !empty($data->personal_id)? $data->personal_id:'' )

->field("address")
        ->label( 'ที่อยู่ปัจจุบัน' )
        ->autocomplete('off')
        ->addClass('form-control')
        ->value( !empty($data->address)? $data->address:'' )

 ->field("note")
        ->label( 'หมายเหตุ' )
        ->autocomplete('off')
        ->type( 'textarea' )
        ->attr('rows', 1)
        ->attr('data-plugin', 'autosize')
        ->addClass('form-control')
        ->value( !empty($data->note)? $data->note:'' );

$formBasic =  $formBasic->html();


# body
$arr['body'] = $formBasic;

$arr['form'] = '<form method="post" action="'.asset( $formAction ).'" data-plugin="formSubmit"></form>';


$statusActive = !empty( $data->status )? $data->status: 1;

$statusOps = '';
foreach ($status as $key => $value) {

    
    $active = $statusActive==$value['id']? ' selected="1"':'';
    $statusOps .= '<option'.$active.' value="'.$value['id'].'">'.$value['name'].'</option>';
}

# fotter: buttons
$arr['button'] = '<div class="d-flex justify-content-end">'.
    '<select class="form-control input-group-text" name="status">'.$statusOps.'</select>'.
    '<button type="submit" class="btn btn-primary btn-submit ml-2"><span class="btn-text">บันทึก</span></button>'.
'</div>';

// $arr['width'] = 700;

// return response()->json($arr, 404);

http_response_code(200);
echo json_encode($arr);
