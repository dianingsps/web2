<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_mahasiswas', function (Blueprint $table) {
            $table->increments('id'); //kolom id auto increments
			$table->string('nama'); //membuat kolom nama
			$table->string('email'); // kolom email
			$table->string('nohp'); //kolom nomer
			$table ->text('alamat'); //kolom alamat
			$table->string('hobi'); // kolom hobi
            $table->timestamps(); // membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_mahasiswas');
    }
}
