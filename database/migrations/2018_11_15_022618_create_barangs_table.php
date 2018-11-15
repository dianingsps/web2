<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nama_barang'); //membuat kolom nama
			$table->integer('stock'); // kolom email
			$table->integer('harga'); //kolom nomer
			$table ->date('expired_date'); //kolom alamat
			$table-> date('tanggal_produksi'); // kolom hobi
            $table->timestamps(); // membuat kolom created_at dan updated_atSS
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
