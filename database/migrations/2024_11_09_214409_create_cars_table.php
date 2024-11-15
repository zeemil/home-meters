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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer');
            $table->string('model');
            $table->string('chassis_number')->nullable();
            $table->string('license_plate')->nullable();
            $table->string('license_plate_country')->nullable();
            $table->date('initial_entry_into_service')->nullable();
            $table->integer('engine_power')->nullable();
            $table->enum('engine_power_unit',['cv', 'kWh'])->nullable();
            $table->enum('fuel_type',['diesel','gasoline'])->nullable();
            $table->string('tire_dimension')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
