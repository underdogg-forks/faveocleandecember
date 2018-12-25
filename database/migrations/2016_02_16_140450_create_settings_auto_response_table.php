<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsAutoResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings__autoresponse', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('new_ticket');
            $table->boolean('agent_new_ticket');
            $table->boolean('submitter');
            $table->boolean('participants');
            $table->boolean('overlimit');
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
        Schema::drop('settings__autoresponse');
    }
}
