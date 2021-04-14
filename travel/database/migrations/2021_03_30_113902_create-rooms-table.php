<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();

            $table->integer('hotel_id');
            $table->string('r_room_type');
            $table->text('r_description')->nullable();
            $table->double('r_price');
            $table->integer('r_discount')->nullable();
            $table->boolean('r_is_available');
            $table->boolean('r_check_in')->nullable();
            $table->boolean('r_check_out')->nullable();

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
        Schema::dropIfExists('rooms');
    }
}
