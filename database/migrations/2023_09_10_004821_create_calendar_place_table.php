<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_place', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('calendar_id'); 
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('calendar_id')->references('id')->on('calendars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_place');
    }
};
