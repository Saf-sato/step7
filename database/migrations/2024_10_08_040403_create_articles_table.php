<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('url');
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }
    //!▪️GPTで提示されたように、各セクションで作ったSQLテーブル内容を入力する　以下一例
    // public function up()
    // {
    //     Schema::create('products', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('company_id')->constrained(); // 外部キー
    //         $table->string('product_name');
    //         $table->integer('price');
    //         $table->integer('stock');
    //         $table->timestamps();
    //     });
    
    // }

    // マイグレーションが作成できたら、もう一度マイグレーションを実行してテーブルを作ること！

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
