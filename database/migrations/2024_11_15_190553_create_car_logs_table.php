<?php

use App\Models\Car;
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
        Schema::create('car_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Car::class);
            $table->dateTime('date');
            $table->integer('mileage')->unsigned();
            $table->decimal('price');
            $table->string('supplier')->nullable();
            $table->text('note')->nullable();
            $table->float('fuel_quantity')->unsigned()->nullable();
            $table->boolean('is_partial_refueling')->nullable();
            $table->decimal('price_per_volume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_logs');
    }
};
