<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'courses',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description');
                $table->unsignedFloat('credits_amount');
                $table->unsignedBigInteger('teacher_id')->nullable();

                $table->foreign('teacher_id')->references('id')->on('teachers');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
