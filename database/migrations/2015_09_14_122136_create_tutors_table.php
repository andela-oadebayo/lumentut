<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tutors', function(Blueprint $t)
        {
            $t->increments('id');
            $t->integer('pdgroup_id')->unsigned();
            $t->string('name');
            $t->string('speciality');
            $t->text('description');
            $t->timestamps();

            $t->foreign('pdgroup_id')->references('id')->on('pdgroups')->onDelete('cascade');

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
        Schema::drop('tutors');
    }
}
