<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjualan_id');
            $table->foreign('penjualan_id')->references('id')->on('penjualans')->onDelete('cascade');
            $table->foreignId('master_id');
            $table->foreign('master_id')->references('id')->on('masters')->onDelete('cascade');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->integer('harga_total');
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
        Schema::dropIfExists('detail_penjualan');
    }
}
