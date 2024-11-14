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
            $table->id('id_req_jual');
            $table->foreignId('id_nota_jual')->constrained('nota_juals')->onDelete('cascade');
            $table->foreignId('id_barang')->constrained('barangs')->onDelete('cascade');
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
