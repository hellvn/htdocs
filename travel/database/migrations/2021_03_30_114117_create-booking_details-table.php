<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();

            $table->integer('customer_id');
            $table->integer('room_id');
            $table->date('bd_start_date');
            $table->integer('bd_duration_in_day');
            $table->string('bd_status');
            $table->dateTime('bd_check_in');
            $table->dateTime('bd_check_out');
            $table->double('bd_total');

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
        Schema::dropIfExists('booking_details');
    }
}
