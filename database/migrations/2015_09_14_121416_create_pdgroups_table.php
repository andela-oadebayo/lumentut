<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pdgroups', function(Blueprint $t)
        {
            $t->increments('id');
            $t->integer('fellow_id')->unsigned();
            $t->string('name');
            $t->text('description')->nullable();
            $t->timestamps();

            $t->foreign('fellow_id')->references('id')->on('fellows')->onDelete('cascade');

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
        Schema::drop('pdgroups');
    }
}
