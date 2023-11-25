<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('offline_exam', function (Blueprint $table) {
            $table->string('room_number')->after('id');
            $table->string('building_name')->after('id');
            $table->string('exam_start_time')->after('id');
            $table->string('exam_end_time')->after('id');
            $table->string('date_time')->after('id');
            $table->integer('subject_code')->after('id');
            $table->string('section')->after('id');
            $table->string('class_name')->after('id');
            $table->string('paper')->after('id');
            $table->string('exam_name')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumn('offline_exam');
    }
};
