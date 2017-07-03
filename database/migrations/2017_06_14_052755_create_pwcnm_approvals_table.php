<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwcnmApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwcnm_approvals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stade');
            $table->string('comments');
            $table->integer('fk_user')->unsigned();
            $table->integer('fk_inscription')->unsigned();
            $table->timestamps();
            
            $table->foreign('fk_inscription')->references('id')->on('pwcnm_inscription_requests')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pwcnm_approvals');
    }
}
