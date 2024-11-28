<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_barang', function (Blueprint $table) {
            $table->bigIncrements('id_detai;');
            $table->unsignedBigInteger('id_barang')->nullable();
            $table->foreign('id_barang')
                ->references('id_barang')
                ->on('barang')
                ->onDelete('set null');
            $table->unsignedBigInteger('id_pembelian')->nullable();
            $table->foreign('id_pembelian')
                ->references('id_pembelian')
                ->on('terima')
                ->onDelete('set null');
            $table->unsignedBigInteger('id_penjualan')->nullable();
            $table->foreign('id_penjualan')
                ->references('id_penjualan')
                ->on('keluar')
                ->onDelete('set null');
            $table->string('serial number');
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
        Schema::dropIfExists('detail_barang');
    }
}
