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
        Schema::table('readings', function (Blueprint $table) {
            $table->foreign(['meter_id'], 'meter_id')->references(['id'])->on('meters')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['unit_id'], 'unit_id')->references(['id'])->on('units')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('readings', function (Blueprint $table) {
            $table->dropForeign('meter_id');
            $table->dropForeign('unit_id');
        });
    }
};