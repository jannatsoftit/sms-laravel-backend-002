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
        Schema::create('offline_exam', function (Blueprint $table) {
            $table->id();
            $table->string('room_number');
            $table->string('building_name');
            $table->string('exam_start_time');
            $table->string('exam_end_time');
            $table->string('date_time');
            $table->integer('subject_code');
            $table->string('section');
            $table->string('class_name');
            $table->string('paper');
            $table->string('exam_name');
            $table->integer('total_marks');
            
            $table->unsignedBigInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('school');
            $table->unsignedBigInteger('class_list_id')->nullable();
            $table->foreign('class_list_id')->references('id')->on('class_list');
            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id')->references('id')->on('section');
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
        Schema::dropIfExists('offline_exam');
    }
};
