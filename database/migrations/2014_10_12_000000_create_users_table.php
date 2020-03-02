<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('status')->nullable();
            
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('line')->nullable();
            
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();

            $table->boolean('is_owner')->nullable();
            $table->boolean('new_password')->nullable();

            $table->rememberToken();
            $table->timestamps();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
