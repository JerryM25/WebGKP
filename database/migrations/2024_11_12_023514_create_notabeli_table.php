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
            $table->bigIncrements('id_nota_beli');
            $table->unsignedBigInteger('id_vendor')->nullable();
            $table->foreign('id_vendor')
                ->references('id_vendor')
                ->on('vendor')
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
        Schema::dropIfExists('notabeli');
    }
}
