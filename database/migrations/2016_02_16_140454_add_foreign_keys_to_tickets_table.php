<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_tickets_users')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('dept_id', 'fk_tickets_department')->references('id')->on('core__departments')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('team_id', 'fk_tickets_teams')->references('id')->on('core__teams')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('priority_id', 'fk_tickets_priorities')->references('priority_id')->on('tickets__priorities')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('sla', 'fk_tickets_slaplans')->references('id')->on('tickets__slaplans')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('help_topic_id', 'fk_tickets_helptopics')->references('id')->on('tickets__helptopics')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('status', 'fk_tickets_statuses')->references('id')->on('tickets__statuses')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('source', 'fk_tickets_sources')->references('id')->on('tickets__sources')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('assigned_to', 'fk_tickets_users')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('fk_tickets_users');
            $table->dropForeign('fk_tickets_department');
            $table->dropForeign('fk_tickets_teams');
            $table->dropForeign('fk_tickets_priorities');
            $table->dropForeign('fk_tickets_slaplans');
            $table->dropForeign('fk_tickets_helptopics');
            $table->dropForeign('fk_tickets_statuses');
            $table->dropForeign('fk_tickets_sources');
            $table->dropForeign('fk_tickets_users');
        });
    }
}
