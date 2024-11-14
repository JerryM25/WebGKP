<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotabeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notabeli', function (Blueprint $table) {
            $table->bigIncrements('id_notabeli');
            $table->bigIncrements('id_vendor');
            $table->date('tanggalbeli');
            $table->timestamps();
        });

        Schema::table('vendor', function (Blueprint $table) {
            $table->unsignedBigInteger('id_vendor');

            $table->foreign('id_vendor')->references('id')->on('vendor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notabeli');
    }
}
