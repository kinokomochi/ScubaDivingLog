<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('diaries', function (Blueprint $table) {
            $table->date('day')->change();
            $table->string('photo1')->nullable()->change();
            $table->string('photo2')->nullable()->change();
            $table->string('photo3')->nullable()->change();
            $table->string('movie')->nullable()->change();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('diaries', function(Blueprint $table){
            $table->dropColumn('day');
            $table->dropColumn('movie');
        });
    }
}
