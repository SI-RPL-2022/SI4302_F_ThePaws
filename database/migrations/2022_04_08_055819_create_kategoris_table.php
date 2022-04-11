<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2022_04_08_055819_create_kategoris_table.php
            $table->string('nama');
=======
            $table->string('judul');
            $table->string('jenis');
            $table->string('kategori');
            $table->string('cover');
            $table->longText('deskripsi'); 
>>>>>>> Farhan_PBI:database/migrations/2022_04_06_155035_create_blogs_table.php
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
        Schema::dropIfExists('kategoris');
    }
}
