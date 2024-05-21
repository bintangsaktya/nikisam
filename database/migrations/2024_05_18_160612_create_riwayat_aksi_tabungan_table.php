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
        Schema::create('riwayat_aksi_tabungan', function (Blueprint $table) {
            $table->id('id_rat');
            $table->foreignId('id_tabungan')->constrained('tabungan', 'id_tabungan');
            $table->dateTime('tanggal');
            $table->enum('tipe', ['Tarikan', 'Setor']);
            $table->double('nominal');
            $table->double('berat')->nullable();
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
        Schema::dropIfExists('riwayat_aksi_tabungan');
    }
};
