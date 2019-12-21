<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->bigIncrements('id_kendaraan');
            $table->bigInteger('id_pemilik')->unsigned();
            $table->string('no_polisi');
            $table->string('nama_kendaraan');
            $table->string('jenis_kendaraan');
            $table->timestamps();

            $table->foreign('id_pemilik')->references('id_pemilik')->on('pemilik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
}
