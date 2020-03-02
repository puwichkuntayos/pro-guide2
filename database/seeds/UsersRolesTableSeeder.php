<?php

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = new UserRole();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Administrator';
        $role_admin->save();

        $role_manager = new UserRole();
        $role_manager->name = 'MD';
        $role_manager->description = 'Manager';
        $role_manager->save();

        $role_user = new UserRole();
        $role_user->name = 'Author';
        $role_user->description = 'Author / Tour Operation';
        $role_user->save();
    }
}
