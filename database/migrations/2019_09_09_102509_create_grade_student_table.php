<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();

            $table->unique(['grade_id', 'student_id']);

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('grade_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_student');
    }
}
