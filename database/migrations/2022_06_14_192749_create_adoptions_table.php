<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peliharaan');
            $table->unsignedBigInteger(('kategori'));
            $table->foreign('kategori')->references('id')->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('jenis_kelamin', ['Jantan', 'Betina']);
            $table->string('ras');
            $table->string('umur');
            $table->string('berat');
            $table->string('no_hp');
            $table->string('alamat');
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
        Schema::dropIfExists('adoptions');
    }
}
