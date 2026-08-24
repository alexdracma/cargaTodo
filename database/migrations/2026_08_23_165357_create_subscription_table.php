<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('subscription', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('charging_company');
            $table->decimal('monthly_cost');
            $table->decimal('discount_percentage');
            $table->date('start_date');
            $table->string('notes');
            $table->boolean('is_active');

            $table->foreign('charging_company')->references('name')->on('charging_company');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
