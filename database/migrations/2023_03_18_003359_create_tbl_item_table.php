<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_item', function (Blueprint $table) {
            $table->id('id_item');
            $table->string('kd_item')->unique();
            $table->string('kd_cat')->index();
            $table->string('nama_item');
            $table->string('harga_item');
            $table->LongText('deskripsi_item');
            $table->string('status_item');
            $table->longtext('file_barang');
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
        Schema::dropIfExists('tbl_item');
    }
}
