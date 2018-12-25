<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('core__departments', function (Blueprint $table) {
            $table->foreign('slaplan_id', 'fk_departments_slaplans')->references('id')->on('tickets__slaplans')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('manager', 'department_ibfk_2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core__departments', function (Blueprint $table) {
            $table->dropForeign('department_ibfk_1');
            $table->dropForeign('department_ibfk_2');
        });
    }
}
