<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->string('license_plate')->primary();
            $table->string('nickname');
            $table->string('brand');
            $table->string('model');
            $table->smallInteger('battery_capacity');
            $table->string('logo_path');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
