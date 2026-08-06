<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluar', function (Blueprint $table) {
            $table->bigIncrements('id_keluar');
            $table->unsignedBigInteger('id_no_keluar');
            $table->foreign('id_no_keluar')
                ->references('id_no_keluar')
                ->on('nokeluar')
                ->onDelete('restrict');
            $table->unsignedBigInteger('id_req_jual');
            $table->foreign('id_req_jual')
                ->references('id_req_jual')
                ->on('reqjual')
                ->onDelete('restrict');
            $table->integer('quantity');
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
        Schema::dropIfExists('keluar');
    }
}
