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
       Schema::create('introduction_user', function (Blueprint $table) {
            $table->text('introduction')->nullable();
            $table->string('name')->nullable(); // 名前
            $table->string('profile_image')->nullable(); // プロフィール画像のファイルパス
            $table->string('contact_information')->nullable(); // 連絡先情報
            $table->date('date_of_birth')->nullable(); // 生年月日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('introduction_user');
    }
};
