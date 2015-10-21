<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleAndCategoryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table)
        {
            $table->increments('id');
            $table->char('title', 64)->comment('标题');
            $table->char('author', 16)->nullable()->comment('作者');
            $table->unsignedInteger('category_id')->default(0)->comment('类别');
            $table->char('tags', 64)->nullable()->comment('标签');
            $table->text('content')->comment('文章内容');
            $table->timestamps();
        });
        Schema::create('category', function (Blueprint $table)
        {
            $table->increments('id');
            $table->char('name', 64)->comment('类别名称');
            $table->unsignedInteger('count')->default(0)->comment('文章数量');
        });
        // Schema::create('tag', function (Blueprint $table)
        // {
        //     $table->increments('id');
        //     $table->char('name', 64)->comment('标签名称');
        //     $table->unsignedInteger('count')->default(0)->comment('文章数量');
        // });
        // Schema::create('map', function (Blueprint $table)
        // {
        //     $table->increments('id');
        //     $table->char('name', 64)->comment('标签名称');
        //     $table->unsignedInteger('count')->default(0)->comment('文章数量');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
        Schema::dropIfExists('category');
    }
}
