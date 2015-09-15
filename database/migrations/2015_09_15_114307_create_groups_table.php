<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('groups', function(Blueprint $t)
        {
            $t->increments('id');
            $t->integer('tutor_id')->unsigned();
            $t->string('name');
            $t->text('description')->nullable();
            $t->timestamps();

            $t->foreign('tutor_id')->references('id')->on('tutors')->onDelete('cascade');

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
        Schema::drop('groups');
    }
}
