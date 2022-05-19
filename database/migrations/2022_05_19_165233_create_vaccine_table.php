<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('kategori');
            $table->foreign('kategori')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('umur');
            $table->foreign('umur')->references('id')->on('umur')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('berat_badan');
            $table->foreign('berat_badan')->references('id')->on('bb')->onDelete('cascade')->onUpdate('cascade');
            $table->text('deskripsi');
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
        Schema::dropIfExists('vaccine');
    }
}
