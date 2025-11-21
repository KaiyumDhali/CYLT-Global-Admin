<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
           Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();        // Project title
            $table->string('client_name')->nullable();        // Project client Name
            $table->text('description')->nullable();    // Project description
            $table->text('othertext')->nullable();      // Extra info
            $table->string('image')->nullable();        // Project image (path)
            $table->tinyInteger('status')
                  ->default(0)
                  ->comment('0 = In Progress, 1 = Completed'); // Project status
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('projects');
    }
};
