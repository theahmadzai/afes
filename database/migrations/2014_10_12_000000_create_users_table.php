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
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->datetime('birth_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table->datetime('last_login_date')->nullable();
            $table->string('last_login_location')->nullable();
            $table->string('last_login_device')->nullable();
            $table->string('last_login_platform')->nullable();
            $table->string('last_login_browser')->nullable();
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
