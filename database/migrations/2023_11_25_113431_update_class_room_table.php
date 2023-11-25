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
        Schema::table('class_room', function (Blueprint $table) {
            $table->string('total_room')->after('class_room_name');
            $table->string('area')->after('class_room_name');
            $table->string('building_name')->after('class_room_name');
            $table->string('room_number')->after('class_room_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumn('class_room');
    }
};
