<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentVoucherModel extends Model
{
  protected $table = 'detail_bill';
  public $primaryKey = 'id';
  public $maxlimit = 24;

  protected $fillable = [
      'tax3','input_tax','note','total','status','type_id','account_number','bank_id','bname','category_id','remark','total_tax',
  ];

  public static function status()
  {
      $items = [];
      // $items[] = ['id'=>'', 'name'=>'ทั้งหมด'];
      $items[] = ['id'=>1, 'name'=>'รอการตรวจสอบ'];
      $items[] = ['id'=>2, 'name'=>'ยกเลิก'];
      return $items;
  }

  public function users()
  {
     return $this->belongsTo('App\Models\User','user_id', 'id');
  }
  public function bill()
  {
     return $this->hasMany('App\Models\BillModel','id', 'detail_id');
  }

}
