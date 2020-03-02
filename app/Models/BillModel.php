<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
  protected $table = '_bill';
  public $primaryKey = 'id';

  protected $fillable = [
      'bill','price','detail_id',
  ];
}
