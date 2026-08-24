<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vehicle_connector', function (Blueprint $table) {
            $table->string('license_plate')->primary();
            $table->string('connector')->primary();

            $table->foreign('license_plate')->references('license_plate')->on('vehicle');
            $table->foreign('connector')->references('name')->on('connector');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicle_connector');
    }
};
