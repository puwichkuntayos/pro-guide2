<?php

// use Illuminate\Support\Facades\Route;
// $routes = \Request::route()->lists();
// dd($routes);

// $currentPath = Route::getFacadeRoot()->current()->uri();
// dd($currentPath);

use Illuminate\Support\Facades\Auth;

$navs = [];


// if( Auth::user()->hasAnyRole('Admin') ){
if( Auth::user()->role_id==1 ){

    $items = [];
    $items[] = array('id'=>'/users', 'name'=>'Users', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Settings', 'items'=>$items);


    $items = [];
    $items[] = array('id'=>'/guides', 'name'=>'รายชื่อไกด์', 'icon' => '<i class="fa fa-address-card-o"></i>');
    // $items[] = array('id'=>'/#', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Guide/TL', 'items'=>$items);

    $items = [];
    $items[] = array('id'=>'/paymentvouchers', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-address-card-o"></i>');
    $items[] = array('id'=>'/totalpaymentvouchers', 'name'=>'ใบสำคัญจ่ายทั้งหมด', 'icon' => '<i class="fa fa-address-card-o"></i>');
    // $items[] = array('id'=>'/#', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Paymentvoucher', 'items'=>$items);

    $items = [];
    $items[] = array('id'=>'/totalpayments', 'name'=>'ใบสำคัญจ่ายทั้งหมด', 'icon' => '<i class="fa fa-address-card-o"></i>');
    // $items[] = array('id'=>'/#', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Account', 'items'=>$items);
}
if( Auth::user()->role_id==2 ){

    $items = [];
    $items[] = array('id'=>'/users', 'name'=>'Users', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Settings', 'items'=>$items);

    $items = [];
    $items[] = array('id'=>'/totalpayments', 'name'=>'ใบสำคัญจ่ายทั้งหมด', 'icon' => '<i class="fa fa-address-card-o"></i>');
    $navs[] = array('title'=>'Account', 'items'=>$items);
}
if( Auth::user()->role_id==3 ){

    $items = [];
    $items[] = array('id'=>'/users', 'name'=>'Users', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Settings', 'items'=>$items);

    $items = [];
    $items[] = array('id'=>'/guides', 'name'=>'รายชื่อไกด์', 'icon' => '<i class="fa fa-address-card-o"></i>');
    // $items[] = array('id'=>'/#', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Guide/TL', 'items'=>$items);

    $items = [];
    $items[] = array('id'=>'/paymentvouchers', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-address-card-o"></i>');
    $items[] = array('id'=>'/totalpaymentvouchers', 'name'=>'ใบสำคัญจ่ายทั้งหมด', 'icon' => '<i class="fa fa-address-card-o"></i>');
    // $items[] = array('id'=>'/#', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Paymentvoucher', 'items'=>$items);

}
if( Auth::user()->role_id==4 ){

    $items = [];
    $items[] = array('id'=>'/users', 'name'=>'Users', 'icon' => '<i class="fa fa-users"></i>');
    $navs[] = array('title'=>'Settings', 'items'=>$items);

    $items = [];
    $items[] = array('id'=>'/paymentvouchers', 'name'=>'ใบสำคัญจ่าย', 'icon' => '<i class="fa fa-address-card-o"></i>');
    $navs[] = array('title'=>'Paymentvoucher', 'items'=>$items);

}

foreach ($navs as $val) {


    echo '<ul class="navbar-nav navbar-sidenav page-navigation-sidenav">';
    if( !empty($val['title']) ){

        echo '<li class="nav-item head"><span>'.$val['title'].'</span></li>';
    }

    foreach ($val['items'] as $key => $value) {

        //
    ?>
    <li class="nav-item{{request()->is( trim($value['id'],'/'), trim($value['id'],'/').'/*' )? ' active':''}}">
        <a class="nav-link" href="<?=$value['id']?>">
            <span class="nav-link-icon"><?=$value['icon']?></span>
            <span class="nav-link-text"><?=$value['name']?></span>
        </a>
    </li>
    <?php }


    echo '</ul>';
} ?>