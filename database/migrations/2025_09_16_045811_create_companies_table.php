<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('companies', function (Blueprint $table) {
        $table->id();
        $table->string('company_name');
        $table->text('company_details')->nullable();
        $table->string('company_address')->nullable();
        $table->string('cell_number')->nullable();
        $table->string('phone_number')->nullable();
        $table->string('hotline_number')->nullable();
        $table->string('email')->nullable();
        $table->string('website_url')->nullable();
        $table->string('trade_license_no')->nullable();
        $table->string('etin_no')->nullable();
        $table->string('bin_no')->nullable();
        $table->string('currency')->nullable();
        $table->string('left_logo')->nullable();
        $table->string('small_logo')->nullable();
        $table->string('status')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
