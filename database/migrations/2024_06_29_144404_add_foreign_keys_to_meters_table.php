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
        Schema::table('meters', function (Blueprint $table) {
            $table->foreign(['location_id'], 'location_id')->references(['id'])->on('locations')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['type_id'], 'type_id')->references(['id'])->on('meter_types')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meters', function (Blueprint $table) {
            $table->dropForeign('location_id');
            $table->dropForeign('type_id');
        });
    }
};