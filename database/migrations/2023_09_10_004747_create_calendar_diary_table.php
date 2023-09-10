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
        Schema::create('calendar_diary', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('diary_id'); 
            $table->unsignedBigInteger('calendar_id');
            $table->foreign('diary_id')->references('id')->on('diaries');
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
        Schema::dropIfExists('calendar_diary');
    }
};
