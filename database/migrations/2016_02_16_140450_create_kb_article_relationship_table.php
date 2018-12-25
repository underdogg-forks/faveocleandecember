<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKbArticleRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kb__article_relationship', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned()->index('article_relationship_article_id_foreign');
            $table->integer('category_id')->unsigned()->index('article_relationship_category_id_foreign');
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
        Schema::drop('kb__article_relationship');
    }
}
