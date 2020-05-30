<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('image')->nullable()->change();
            $table->string('gender')->change();
            $table->string('licence')->change();
            $table->string('experience')->change();
            $table->string('prefecture')->nullable()->change();
            $table->text('introduction')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('image')->nullable();
            $table->dropColumn('gender');
            $table->dropColumn('licence');
            $table->dropColumn('experience');
            $table->dropColumn('prefecture')->nullable();
            $table->dropColumn('introduction')->nullable();


        });
    }
}
