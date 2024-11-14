<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reqbeli', function (Blueprint $table) {
            $table->bigIncrements('id_reqbeli');
            $table->bigIncrements('id_notabeli');
            $table->bigIncrements('id_brg');
            $table->integer('quantity');
            $table->integer('harga_beli');
            $table->integer('total');
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
        Schema::dropIfExists('reqbeli');
    }
}
