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
        Schema::create('stok_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_supplier');
            $table->string('kode_sku');
            $table->string('nama');
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('barang_masuk');
            $table->string('keterangan_masuk');
            $table->string('tgl_masuk');
            $table->integer('baran_keluar');
            $table->string('keterangan_keluar');
            $table->string('tgl_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_barang');
    }
};
