<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePwcnmRegistrationProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwcnm_registration_processes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('period');
            $table->integer('anno');
            $table->date('InitialDate');
            $table->date('FinalDate');
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
        Schema::drop('pwcnm_registration_processes');
    }
}
