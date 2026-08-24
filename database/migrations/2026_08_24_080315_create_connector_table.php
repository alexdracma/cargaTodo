<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('connector', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('logo_path');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('connector');
    }
};
