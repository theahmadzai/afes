<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('job_profile')->nullable();
            $table->text('skills')->nullable();
            $table->text('tools')->nullable();
            $table->string('department')->nullable();
            $table->string('minimum_education')->default('Not Required');
            $table->string('location')->default('Kabul');
            $table->string('required_languages')->default('English');
            $table->integer('total_positions')->default(1);
            $table->enum('shift', ['Morning', 'Evening'])->default('Evening');
            $table->enum('gender', ['Male', 'Female', 'Any'])->default('Any');
            $table->enum('work_type', ['Part-Time', 'Full-Time'])->default('Part-Time');
            $table->enum('experience', ['Fresh', '1-2 Years', '3-4 Years', '5 > Years'])->default('Fresh');
            $table->enum('status', ['Open', 'Closed'])->default('Open');
            $table->datetime('posted_at')->useCurrent();
            $table->datetime('closing_at')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
