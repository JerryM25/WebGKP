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
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')
                ->references('id_customer')
                ->on('customer')
                ->onDelete('restrict');
            $table->string('no_notajual')->unique();
            $table->date('tanggal');
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
        Schema::dropIfExists('notajual');
    }
}
