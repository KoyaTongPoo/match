<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            // $table->bigIncrements('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
            $table->increments('id');
			$table->string('name',64)->nullable();
            $table->string('password',255)->nullable();
            $table->integer('year')->nullable();
            $table->integer('mouth')->nullable();
            $table->integer('day')->nullable();
            $table->string('gender')->nullable();
            $table->string('referral_code')->nullable();
            $table->integer('uranai_seikaku')->nullable();
            $table->integer('kanri_flg')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
