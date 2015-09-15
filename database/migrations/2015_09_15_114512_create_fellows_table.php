<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFellowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('fellows', function(Blueprint $t)
        {
            $t->increments('id');
            $t->integer('level_id')->unsigned();
            $t->integer('group_id')->unsigned();
            $t->string('name');
            $t->timestamps();


            $t->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $t->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');


        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('fellows');
    }
}
