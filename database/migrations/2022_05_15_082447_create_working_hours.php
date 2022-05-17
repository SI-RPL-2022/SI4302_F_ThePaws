<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pethouse');
            $table->foreign('pethouse')->references('id')->on('pethouses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('day');
            $table->time('open');
            $table->time('close');
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
        Schema::dropIfExists('working_hours');
    }
}
