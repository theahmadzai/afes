<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('marital_status', ['SINGLE', 'MARRIED', 'WIDOWED', 'SEPARATED', 'DIVORCED']);
            $table->datetime('date_of_birth');
            $table->string('cnic');
            $table->string('city');
            $table->string('address');
            $table->string('contact_number');
            $table->string('email');
            $table->text('about_us')->nullable();
            $table->enum('status', ['Accepted', 'Pending', 'Rejected']);
            $table->unsignedBigInteger('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs');
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
        Schema::dropIfExists('applications');
    }
}
