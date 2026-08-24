<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('charging_point_connector', function (Blueprint $table) {
            $table->string('charging_point')->primary();
            $table->string('connector')->primary();
            $table->integer('max_power_kw');
            $table->decimal('price_per_kw_day');
            $table->decimal('price_per_kw_night');
            $table->time('day_start_time');
            $table->time('night_start_time');
            $table->decimal('idle_fee_per_minute');

            $table->foreign('charging_point')->references('code')->on('charging_point');
            $table->foreign('connector')->references('name')->on('connector');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('charging_point_connector');
    }
};
