<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwcnmInscriptionRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwcnm_inscription_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('studentId');
            $table->string('studentName');
            $table->integer('phone');
            $table->string('email');
            $table->double('weightedAverage');
            $table->integer('fk_course')->unsigned();
            $table->integer('group');
            $table->integer('timesAttended');
            $table->string('observations',1000);
            $table->integer('fk_process')->unsigned();
            $table->integer('fk_career')->unsigned();
            $table->integer('fk_location')->unsigned();
            $table->timestamps();
            
            $table->foreign('fk_course')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_process')->references('id')->on('pwcnm_registration_processes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_career')->references('id')->on('carrers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_location')->references('id')->on('pwcnm_second_locations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pwcnm_inscription_requests');
    }
}
