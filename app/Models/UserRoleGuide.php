<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoleGuide extends Model
{
    protected $table = 'user_role_guide';
    public $primaryKey = 'id';
    public $itemstamps = false;
    public $maxlimit = 24;

    protected $fillable = [
        'name',
    ];

}
