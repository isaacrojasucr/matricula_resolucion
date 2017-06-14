<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwcnmRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwcnm_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course');
            $table->double('grade');
            $table->integer('cycle');
            $table->integer('fk_inscription');
            $table->foreign('fk_inscription')->references('id')->on('pwcnm_inscription_requests')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pwcnm_requirements');
    }
}
