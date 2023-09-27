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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // 支出カテゴリ
            $table->string('memo'); // メモ
            $table->integer('amount'); // 支出額
            $table->date('expense_date'); // 支出日
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
        Schema::dropIfExists('expenses');
    }
};
