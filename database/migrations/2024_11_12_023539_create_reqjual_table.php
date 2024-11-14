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
            $table->bigIncrements('id_reqjual');
            $table->bigIncrements('id_notajual');
            $table->bigIncrements('id_brg');
            $table->integer('quantity');
            $table->integer('harga_jual');
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
        Schema::dropIfExists('reqjual');
    }
}
