<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'ชง',
            'email'    => 'chong@bkksoft.me',
            'username'  => 'chong',
            'password'   =>  Hash::make('1234'),
            'status'   =>  1,
            'remember_token' =>  str_random(10),
            'is_owner' => 1,
        ]);

        User::create([
            'name'    => 'K 13',
            'email'    => 'manager@pro.co',
            'username'  => 'manager',
            'password'   =>  Hash::make('k13'),
            'status'   =>  1,
            'remember_token' =>  str_random(10),
        ]);

        User::create([
            'name'    => 'Admin',
            'email'    => 'admin@pro.co',
            'username'  => 'admin',
            'password'   =>  Hash::make('admin'),
            'status'   =>  1,
            'remember_token' =>  str_random(10),
        ]);

        User::create([
            'name'    => 'OP',
            'email'    => 'op@pro.co',
            'username'  => 'op',
            'password'   =>  Hash::make('op'),
            'status'   =>  1,
            'remember_token' =>  str_random(10),
        ]);
    }
}
