<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides_invites', function (Blueprint $table) {
            $table->integer('user_id')->nullable();
            $table->increments('id');

            $table->string('name');
            $table->string('email')->nullable();
            $table->text('remake')->nullable();

            $table->dateTime('exp')->nullable()->comment('วันหมดอายุ');

            $table->boolean('status')->nullable()->comment('มีการกดเข้ามาลงทะเบียน : 0=ยัง, 1=มาแล้ว');
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
        Schema::dropIfExists('guides_invites');
    }
}
