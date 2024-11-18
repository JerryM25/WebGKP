<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotajualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notajual', function (Blueprint $table) {
            $table->bigIncrements('id_nota_jual');
            $table->unsignedBigInteger('id_customer')->nullable();
            $table->foreign('id_customer')
                ->references('id_customer')
                ->on('customer')
                ->onDelete('set null');
            $table->date('tanggal');
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
        Schema::dropIfExists('notajual');
    }
}
