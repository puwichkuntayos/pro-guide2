<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    // use Notifiable;
    protected $table = 'users_roles';
    public $primaryKey = 'id';
    public $itemstamps = false;
    public $maxlimit = 24;


    public function users()
    {
        return $this->belongsToMany('App\User', 'users_roles_permit', 'role_id', 'user_id');
    }
    
}
