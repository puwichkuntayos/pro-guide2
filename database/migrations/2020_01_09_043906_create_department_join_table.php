<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentJoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_join', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->comment('FK users_position->id : ผู้ใช้');
            $table->integer('position_id')->comment('FK position->id : ตำแหน่ง');

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
        Schema::dropIfExists('department_join');
    }
}
