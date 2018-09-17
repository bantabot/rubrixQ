<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('place');

            $table->integer('toast');
            $table->integer('presentation');
            $table->integer('booty_factor');
            $table->integer('tenderness');
            $table->integer('smokiness');
            $table->integer('sauce');
            $table->integer('portion_size');
            $table->integer('slaw');
            $table->integer('meat_sauce_combo');
            $table->integer('value');
            $table->integer('go_back');
            $table->integer('recommend');
            $table->integer('sides');
            $table->integer('brunswick_stew');
            $table->integer('pickles');
            $table->integer('service');
            $table->integer('dessert');
            $table->integer('ambiance');
            $table->integer( 'bonus');


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
        Schema::dropIfExists('rubrics');
    }
}
