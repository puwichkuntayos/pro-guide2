<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PositionModel extends Model
{
  protected $table = 'users_position';
  public $primaryKey = 'id';
  public $itemstamps = false;


  public static function status()
  {

      $status = [];
      $status[] = ['id'=>1, 'name'=>'ยืนยันแล้ว'];
      $status[] = ['id'=>2, 'name'=>'รอตรวจสอบ'];
      $status[] = ['id'=>3, 'name'=>'กำลังเชิญ'];
      $status[] = ['id'=>0, 'name'=>'ยกเลิก'];

      return $status;
  }
}
