<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('budget', function (Blueprint $table) {
            $table->tinyInteger('month');
            $table->tinyInteger('year');
            $table->decimal('amount');

            $table->primary(['month', 'year']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('budget');
    }
};
