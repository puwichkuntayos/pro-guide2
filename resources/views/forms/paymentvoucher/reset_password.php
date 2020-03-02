<?php

$Fn = new Fn;


$formAction = "/api/v1/users/{$data->id}/reset_password";

$arr['hiddenInput'][] = array('name'=>'id', 'value'=>$data->id);
$arr['hiddenInput'][] = array('name'=>'_method', 'value'=>'PUT');

$arr['title'] = 'รีเซ็ตรหัสผ่าน';

$arr['hiddenInput'][] = array('name'=>'_token', 'value'=>csrf_token());


$form = new Form();
$formBasic = $form->create()
    // set From
    ->elem('div')
    ->addClass('form-insert')
    ->style('horizontal')

->field("password_auto")
       ->label( '&nbsp;' )
       ->text('<label class="checkbox"><input type="checkbox" name="password_auto" id="password_auto"><span class="ml-1">สร้างรหัสผ่านอัตโนมัติ</span></label>')

 ->field("password")
        ->label( 'รหัสผ่านใหม่*' )
        ->autocomplete('off')
        ->addClass('form-control input-password')
        ->maxlength(175)
        ->type('password')
       //  ->attr('aria-label', 'required')

 ->field("password_confirmation")
        ->label( 'ยืนยันรหัสผ่าน*' )
        ->autocomplete('off')
        ->addClass('form-control input-password')
        ->maxlength(175)
        ->type('password')
       //  ->attr('aria-label', 'required')

->html();

# body
$arr['body'] = '<div data-plugin="formResetPassword">'.$formBasic.'</div>';

$arr['form'] = '<form method="post" action="'.asset( $formAction ).'" data-plugin="formSubmit"></form>';


# fotter: buttons
$arr['button'] = '<button type="submit" class="btn btn-primary btn-submit ml-2"><span class="btn-text">บันทึก</span></button>';


http_response_code(200);
echo json_encode($arr);
