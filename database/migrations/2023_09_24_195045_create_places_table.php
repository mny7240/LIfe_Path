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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // タイトル
            $table->text('content'); // 内容
            $table->date('departure_date'); // 出発日
            $table->time('departure_time'); // 出発時間
            $table->date('return_date'); // 帰宅日
            $table->time('return_time'); // 帰宅時間
            $table->string('url')->nullable(); // URL (オプション)
            $table->unsignedBigInteger('user_id'); // ユーザーID（外部キー）
            $table->timestamps();

            // 外部キー制約の設定
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
        Schema::dropIfExists('places');
    }
};
