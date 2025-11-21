<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('company_name');
            $table->text('description');
            $table->integer('rating')->default(0);  // Rating from 1-5
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_reviews');
    }
}
