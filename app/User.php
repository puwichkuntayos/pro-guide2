<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password','role_id',

        'last_login_at',
        'last_login_ip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\UserRole', 'users_roles_permit', 'user_id', 'role_id');
    }

    public function rolesguide()
    {
        return $this->belongsTo('App\Models\UserRoleGuide', 'role_id', 'id');
    }

    public function hasAnyRole($roles)
    {
        if( is_array($roles) ){
            foreach ($roles as $role) {
                if( $this->hasRole($role)) {
                    return true;
                }
            }
        }else {
            if( $this->hasRole($roles)) {
                return true;
            }   
        }

        return false;
    }
    public function hasRole($role)
    {
        if( $this->roles()->where('name', $role)->first() ){
            return true;
        }
        return false;
    }

    public function getRole($role){
         if( $this->rolesguide()->where('id', $role)->first() ){
            return true;
        }
        return false;
    }

}
