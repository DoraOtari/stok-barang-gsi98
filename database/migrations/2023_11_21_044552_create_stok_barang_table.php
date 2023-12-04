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
            $table->integer('harga');
            $table->integer('qty_masuk')->nullable();
            $table->string('tgl_masuk')->nullable();
            $table->integer('qty_keluar')->nullable();
            $table->enum('keterangan', ['keluar', 'masuk']);
            $table->string('tgl_keluar')->nullable();
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
