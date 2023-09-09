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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // プライマリキー
            $table->bool('executed_status');
            $table->string('title');
            $table->string('content');
            $table->string('category');
            $table->date('created_at');
            $table->date('updated_at');
            $table->int('co_user_id');
            $table->unsignedBigInteger('user_id'); // 外部キー
            
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
