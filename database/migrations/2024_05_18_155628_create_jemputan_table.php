<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemputan', function (Blueprint $table) {
            $table->id('id_jemputan');

            $table->foreignId('id_nasabah')->references('id_nasabah')->on('nasabah');

            $table->foreignId('id_penjemput')->nullable()->references('id_penjemput')->on('penjemput');

            $table->dateTime('tanggal');
            $table->string('alamat');
            $table->string('jadwal');

            $table->foreignId('jenis_sampah')->constrained('jenis_sampah', 'id_jenis_sampah');
            $table->double('berat');
            $table->double('harga')->nullable();

            $table->enum('konfirmasi', ['Pending', 'Diterima', 'Ditolak', 'Dalam Perjalanan', 'Selesai']);

            $table->string('bukti_img')->nullable();

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
        Schema::dropIfExists('jemputan');
    }
};
