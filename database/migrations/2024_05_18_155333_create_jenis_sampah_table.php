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
        Schema::create('jenis_sampah', function (Blueprint $table) {
            $table->id('id_jenis_sampah');
            $table->string('jenis_sampah');
            $table->double('harga_kilo');
            $table->text('deskripsi');

            $table->foreignId('id_admin')->references('id_admin')->on('admin');

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
        Schema::dropIfExists('jenis_sampah');
    }
};
