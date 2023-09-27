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
            $table->id();
            $table->boolean('executed_status'); // 実行しているかどうかのステータス
            $table->string('title'); // タイトル
            $table->text('content'); // 内容
            $table->string('category'); // カテゴリ
            $table->unsignedBigInteger('user_id'); // ユーザーID（外部キー）
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
        Schema::dropIfExists('tasks');
    }
};
