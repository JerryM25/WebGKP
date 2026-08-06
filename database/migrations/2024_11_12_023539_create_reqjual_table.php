<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reqjual', function (Blueprint $table) {
            $table->bigIncrements('id_req_jual');
            $table->unsignedBigInteger('id_nota_jual');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_nota_jual')
                ->references('id_nota_jual')
                ->on('notajual')
                ->onDelete('restrict');
            $table->foreign('id_barang')
                ->references('id_barang')
                ->on('barang')
                ->onDelete('restrict');
            $table->integer('quantity');
            $table->decimal('harga_jual', 10, 2);
            $table->decimal('total', 15, 2);
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
        Schema::dropIfExists('reqjual');
    }
}
