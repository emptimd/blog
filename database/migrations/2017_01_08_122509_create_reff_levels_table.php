<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReffLevelsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reff_levels', function (Blueprint $table) {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('reff_level')->unsigned();
            $table->tinyInteger('value')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

public function down()
{
    Schema::drop('reff_levels');
}
}
