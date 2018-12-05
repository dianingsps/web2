<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
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
			$table->string('username');//membuat kolom username
			$table->string('email'); // kolom email
			$table->string('password')//membuat kolom password
			$table->string('nohp'); //kolom nomer
			$table ->text('alamat'); //kolom alamat
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
        Schema::dropIfExists('user');
    }
}
