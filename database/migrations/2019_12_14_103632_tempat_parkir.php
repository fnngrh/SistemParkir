<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TempatParkir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_parkir', function (Blueprint $table) {
            $table->bigIncrements('id_parkir');
            $table->bigInteger('id_kendaraan')->unsigned();
            $table->datetime('waktu_masuk');
            $table->datetime('waktu_keluar');
            $table->timestamps();

            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempat_parkir');
    }
}
