<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();

            $table->string('htl_name');
            $table->string('htl_address');
            $table->string('district');
            $table->string('city');
            $table->integer('star_ranking');
            $table->boolean('htl_ameneties_parking');
            $table->boolean('htl_ameneties_work');
            $table->boolean('htl_ameneties_elevator');
            $table->boolean('htl_ameneties_wifi');
            $table->boolean('htl_ameneties_laundry');
            $table->boolean('htl_ameneties_landscape');
            $table->boolean('htl_ameneties_dinner');
            $table->boolean('htl_ameneties_reception');
            $table->boolean('htl_ameneties_bus');
            $table->boolean('htl_ameneties_dumbbell');
            $table->boolean('htl_ameneties_platter');
            $table->boolean('htl_ameneties_events_planning');
            $table->boolean('htl_ameneties_motorbike');
            $table->boolean('htl_ameneties_atm');
            $table->text('description');

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
        Schema::dropIfExists('hotels');
    }
}
