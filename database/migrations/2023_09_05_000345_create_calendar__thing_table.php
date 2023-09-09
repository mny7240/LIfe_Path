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
        Schema::create('calendar__thing', function (Blueprint $table) {
            $table->id(); // プライマリキー
            $table->integer('thing_id');
            $table->unsignedBigInteger('calendar_id'); // 外部キー
            
            // 外部キー制約
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
        Schema::dropIfExists('calendar__thing');
    }
};
