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
            $t->integer('class_id')->unsigned();
            $t->string('name');
            $t->timestamps();

        });

        Schema::table('fellows', function($t)
        {
            $t->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::drop('fellows');
    }
}
