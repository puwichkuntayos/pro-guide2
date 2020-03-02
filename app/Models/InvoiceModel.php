<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    protected $table = 'invoice';
    public $primaryKey = 'id';
    public $itemstamps = false;

     protected $fillable = [
        'userid', 'type', 'total', 'status',
    ];

    public static function status()
    {
        $status = [];
        $status[] = ['id'=>1, 'name'=>'อนุมัติแล้ว'];
        $status[] = ['id'=>2, 'name'=>'รอตรวจสอบ'];
        $status[] = ['id'=>0, 'name'=>'ไม่อนุมัติ'];

        return $status;
    }
   
}
