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
            $table->string('number_id')->nullable()->default(null)->change();
            $table->renameColumn('number_id', 'number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meters', function (Blueprint $table) {
            $table->string('number')->nullable(false)->change();
            $table->renameColumn('number', 'number_id');
        });
    }
};
