<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHelpTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets__helptopics', function (Blueprint $table) {
            $table->foreign('custom_form', 'help_topic_ibfk_1')->references('id')->on('custom_forms')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('core__departments', 'help_topic_ibfk_2')->references('id')->on('core__departments')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('tickets__statuses', 'help_topic_ibfk_3')->references('id')->on('tickets__statuses')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('priority', 'help_topic_ibfk_4')->references('priority_id')->on('tickets__priorities')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('tickets__slaplans', 'help_topic_ibfk_5')->references('id')->on('tickets__slaplans')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('auto_assign', 'help_topic_ibfk_6')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__helptopics', function (Blueprint $table) {
            $table->dropForeign('help_topic_ibfk_1');
            $table->dropForeign('help_topic_ibfk_2');
            $table->dropForeign('help_topic_ibfk_3');
            $table->dropForeign('help_topic_ibfk_4');
            $table->dropForeign('help_topic_ibfk_5');
            $table->dropForeign('help_topic_ibfk_6');
        });
    }
}
