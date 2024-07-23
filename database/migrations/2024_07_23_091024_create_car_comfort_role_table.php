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
        Schema::create('car_comfort_role', function (Blueprint $table) {
            $table->foreignId("car_comfort_id")
                ->references("id")
                ->on("car_comforts")
                ->cascadeOnDelete();
            $table->foreignId("role_id")
                ->references("id")
                ->on("roles")
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_comport_role');
    }
};
