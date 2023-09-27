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
        Schema::create('things', function (Blueprint $table) {
            $table->id();
            $table->string('want'); // 欲しいものの名前
            $table->integer('price'); // 貯金目標金額または欲しいものの価格
            $table->string('url')->nullable(); // URL（オプション）
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
        Schema::dropIfExists('things');
    }
};
