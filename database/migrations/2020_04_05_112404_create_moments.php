<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moments', function (Blueprint $table) {
            $table->id();
            $table->Integer('score')->unsigned();
            $table->Date('date');
            $table->BigInteger('question_id')->unsigned();
            $table->BigInteger('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('question_id')
                ->references('id')
                ->on('questions');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moments');
    }
}
