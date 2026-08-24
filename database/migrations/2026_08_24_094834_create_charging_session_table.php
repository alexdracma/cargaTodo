<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('charging_session', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->string('charging_point');
            $table->string('connector');
            $table->string('subscription');
            $table->dateTime('started_at');
            $table->integer('total_duration_minutes');
            $table->decimal('kw_charged');
            $table->decimal('avg_charging_speed');
            $table->tinyInteger('battery_percentage_start');
            $table->tinyInteger('battery_percentage_end');
            $table->decimal('cost');
            $table->string('notes');

            $table->foreign('license_plate')->references('license_plate')->on('vehicle');
            $table->foreign('charging_point')->references('code')->on('charging_point');
            $table->foreign('connector')->references('name')->on('connector');
            $table->foreign('subscription')->references('name')->on('subscription');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('charging_session');
    }
};
