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
        Schema::create('readings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('unit_id')->index('unit_id');
            $table->unsignedBigInteger('meter_id')->index('meter_id');
            $table->decimal('value', 10, 3)->index('value');
            $table->boolean('isOfficial')->nullable()->index('isofficial');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent()->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readings');
    }
};
