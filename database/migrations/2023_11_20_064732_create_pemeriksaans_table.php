<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id('id_pemeriksaan');
            $table->unsignedBigInteger('id_pasien_pemeriksaan');
            $table->unsignedBigInteger('id_dokter_pemeriksaan');
            $table->text('gejala');
            $table->text('diagnosis');
            $table->text('obat');
            $table->text('keterangan');
            $table->timestamps();
            $table->foreign('id_pasien_pemeriksaan')->references('id_pasien')->on('pasiens')->onDelete('cascade');
            $table->foreign('id_dokter_pemeriksaan')->references('id_dokter')->on('dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaans');
    }
}
