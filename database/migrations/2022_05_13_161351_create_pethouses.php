<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePethouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pethouses', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('kategori1');
            $table->foreign('kategori1')->references('id')->on('kategoris')->onDelete('cascade');
            $table->unsignedBigInteger('kategori2');
            $table->foreign('kategori2')->references('id')->on('kategoris2')->onDelete('cascade');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('website');
            $table->text('maps');
            $table->decimal('rating', 2, 1);
            $table->string('foto');
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
        Schema::dropIfExists('pethouses');
    }
}
