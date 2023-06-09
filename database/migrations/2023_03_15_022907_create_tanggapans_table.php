<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan');
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan')->onDelete('cascade');
            $table->unsignedBigInteger('id_pengaduan')->nullable();
            $table->date('tgl_tanggapan');
            $table->string('tanggapan');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade');
            $table->unsignedBigInteger('id_petugas')->nullable();
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
        Schema::dropIfExists('tanggapan');
    }
};
