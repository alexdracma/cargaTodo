<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('charging_company', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('logo_path');
            $table->tinyText('notes'); //255 chars max
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('charging_company');
    }
};
