<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDoListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('list');
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
        Schema::dropIfExists('to_do_lists');
            $table->dropColumn('list1');
            $table->dropColumn('list2');
            $table->dropColumn('list3');
            $table->dropColumn('list4');
            $table->dropColumn('list5');
            $table->dropColumn('id');
            $table->dropColumn('timestamps');


    }

}
