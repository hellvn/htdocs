<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_comments', function (Blueprint $table) {
            $table->id();

            $table->integer('hotel_id');
            $table->integer('customer_id');
            $table->integer('hc_rating_location');
            $table->integer('hc_rating_service');
            $table->integer('hc_rating_facilities');
            $table->integer('hc_rating_cost');
            $table->integer('hc_rating_cleanliness');
            $table->text('hc_messages')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_comments');
    }
}
