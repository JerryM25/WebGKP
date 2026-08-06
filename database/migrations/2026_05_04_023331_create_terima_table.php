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
            $table->bigIncrements('id_terima');
            $table->unsignedBigInteger('id_no_terima');
            $table->foreign('id_no_terima')
                ->references('id_no_terima')
                ->on('noterima')
                ->onDelete('restrict');
            $table->unsignedBigInteger('id_req_beli');
            $table->foreign('id_req_beli')
                ->references('id_req_beli')
                ->on('reqbeli')
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
        Schema::dropIfExists('terima');
    }
}
