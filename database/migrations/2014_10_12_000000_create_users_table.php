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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            /** Last Login */
            $table->ipAddress('last_login_ip')->nullable();
            $table->timestamp('last_login_date')->nullable();
            $table->string('last_login_location')->nullable();
            $table->string('last_login_device')->nullable();
            $table->string('last_login_platform')->nullable();
            $table->string('last_login_browser')->nullable();
            /** Remember Token */
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
