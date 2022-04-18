<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedBigInteger('kategori1');
            $table->foreign('kategori1')->references('id')->on('kategoris')->onDelete('cascade');
            $table->unsignedBigInteger('kategori2');
            $table->foreign('kategori2')->references('id')->on('kategoris2')->onDelete('cascade');
            $table->string('creator');
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
        Schema::dropIfExists('blogs');
    }
}
