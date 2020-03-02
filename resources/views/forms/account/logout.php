<?php


$arr['hiddenInput'][] = array('name'=>'_token', 'value'=>csrf_token());
$arr['hiddenInput'][] = array('name'=>'_method', 'value'=>'post');
$arr['title'] = 'ออกจากระบบ';

# body
$arr['body'] = 'ยืนยันการออกจากระบบหรือไม่?';

$arr['form'] = '<form method="post" action="'.route('logout').'"></form>';

# fotter: buttons
$arr['button'] = '<button type="submit" class="btn btn-primary btn-submit ml-2"><span class="btn-text">ออกจากระบบ</span></button>';


http_response_code(200);
echo json_encode($arr);
