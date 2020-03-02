<?php

$Fn = new Fn;


$form = new Form();
$formBasic = $form->create()
    // set From
    ->elem('div')
    ->addClass('form-insert')
    ->style('horizontal')

->field("name")
    ->label( 'ชื่อ*' )
    ->autocomplete('off')
    ->addClass('form-control')
    ->maxlength(175)
    // ->attr('aria-label', 'required')
    ->value( $data->name )

 ->field("email")
    ->label( 'อีเมล*' )
    ->autocomplete('off')
    ->addClass('form-control disabled')
    ->attr('disabled', 1)
    ->value(  $data->email )

 ->field("remake")
    ->label( 'หมายเหตุ' )
    ->autocomplete('off')
    ->type( 'textarea' )
    ->attr('rows', 2)
    ->attr('data-plugin', 'autosize')
    ->addClass('form-control')
    ->value( '' )

->html();

$arr['title'] = 'ส่งคำเชิญอีกครั้ง';

# body
$arr['body'] = $formBasic;


// '<div class="alert alert-warning">'.
// 'หมายเหตุ'.
// '<p>การเชิญ</p>'.
// '</div>'.
// ลิงกนี้สามารถอยู่ได้เพียง 30 นาที

$arr['form'] = '<form method="post" action="'.asset( '/guides/reinvite' ).'" data-plugin="formSubmit"></form>';
$arr['hiddenInput'][] = array('name'=>'_token', 'value'=>csrf_token());
$arr['hiddenInput'][] = array('name'=>'id', 'value'=> $data->id );


# fotter: buttons
$arr['button'] = '<button type="submit" class="btn btn-primary btn-submit ml-2"><span class="btn-text">บันทึก</span></button>';

http_response_code(200);
echo json_encode($arr);
