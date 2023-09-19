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
        Schema::create('calendar_thing', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('thing_id'); // thing_id カラムを追加
            $table->unsignedBigInteger('calendar_id'); 
            $table->foreign('thing_id')->references('id')->on('things');
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
        Schema::dropIfExists('calendar_thing');
    }
};
