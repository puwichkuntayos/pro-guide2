<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuideInvite extends Model
{
    protected $table = 'guides_invites';
    public $primaryKey = 'id';
    public $itemstamps = false;
    
    protected $fillable = [
        'name', 'email', 'remake', 'status'
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function register()
    {
        return $this->belongsTo( 'App\Models\GuideRegistration', 'id', 'invite_id' );
    }


    public function state()
    {
        $arr = [
            'id' => $this->status,
        ];

        switch ($this->status) {
            case 0:
                $arr['name'] = 'ปฎิเสธ';
                $arr['type'] = 'danger';
            break;
            
            case 1:
                $arr['name'] = 'ใช้งาน';
                $arr['type'] = 'success';
            break;
            
            case 2:
                $arr['name'] = 'รอตรวจสอบ';
                $arr['type'] = 'warning';
            break;
            
            case 3:
                $arr['name'] = 'กำลังเชิญ';
                $arr['type'] = 'info';
                break;

            case 4:
                $arr['name'] = 'รอแก้ไข';
                $arr['type'] = 'danger';
                break;
        }

        return json_decode(json_encode($arr));
    }
}
