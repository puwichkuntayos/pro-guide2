<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRolesPermitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 1 = ตั้งค่าระบบ
        // 2 = ยืนยันระบบ 
        // 3 = ข้อมูล 

        // Owner: 1 2 3
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [1, 1]);
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [1, 2]);
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [1, 3]);

        // Manager: 1 2 3
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [2, 1]);
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [2, 2]);
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [2, 3]);

        // Admin: 1 3
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [3, 1]);
        
        // Op: 3
        DB::insert('insert into users_roles_permit (user_id, role_id) values (?, ?)', [4, 3]);
       
    }
}
