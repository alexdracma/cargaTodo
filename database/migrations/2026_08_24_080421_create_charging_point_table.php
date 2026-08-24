<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('charging_point', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('charging_company');
            $table->string('nickname');
            $table->string('address');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->text('notes');

            $table->foreign('charging_company')->references('name')->on('charging_company');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('charging_point');
    }
};
