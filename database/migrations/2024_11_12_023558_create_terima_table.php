<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terima', function (Blueprint $table) {
            $table->bigIncrements('id_pembelian');
            $table->unsignedBigInteger('id_req_beli')->nullable();
            $table->foreign('id_req_beli')
                ->references('id_req_beli')
                ->on('reqbeli')
                ->onDelete('set null');
            $table->date('tanggal');
            $table->integer('quantity');
            $table->string('status');
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
        Schema::dropIfExists('terima');
    }
}
