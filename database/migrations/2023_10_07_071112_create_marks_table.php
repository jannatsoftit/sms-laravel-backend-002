<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('school');
            $table->unsignedBigInteger('class_list_id')->nullable();
            $table->foreign('class_list_id')->references('id')->on('class_list');
            $table->unsignedBigInteger('grades_id')->nullable();
            $table->foreign('grades_id')->references('id')->on('grades');
            $table->string('student_name');
            $table->integer('total_marks');  //marks_obtain
            $table->decimal('grade_point', 5, 2); //Earned Grade Point
            $table->string('class_name');
            $table->string('file');
            $table->string('letter_grade');
            $table->string('section');
            $table->string('comment');
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
        Schema::dropIfExists('marks');
    }

};
