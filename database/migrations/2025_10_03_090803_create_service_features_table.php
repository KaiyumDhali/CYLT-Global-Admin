<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_features', function (Blueprint $table) {
            $table->id();
            // Point to the correct table 'services'
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->string('feature');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_features');
    }
};
