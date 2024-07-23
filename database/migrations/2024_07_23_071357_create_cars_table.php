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
            $table->string("name");
            $table->foreignId("car_model_id")
                ->references("id")
                ->on("car_models")
                ->cascadeOnDelete();
            $table->foreignId("car_comfort_id")
                ->references("id")
                ->on("car_comforts")
                ->cascadeOnDelete();
            $table->foreignId("car_driver_id")
                ->references("id")
                ->on("car_drivers")
                ->cascadeOnDelete();
            $table->dateTime("travel_start");
            $table->dateTime("travel_end");
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
