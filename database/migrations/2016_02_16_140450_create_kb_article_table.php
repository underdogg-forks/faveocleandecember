<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKbArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kb__articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug');
            $table->text('description', 65535);
            $table->unsignedMediumInteger('status');
            $table->unsignedMediumInteger('type');
            $table->dateTime('publish_time')->nullable();
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
        Schema::drop('kb__articles');
    }
}
