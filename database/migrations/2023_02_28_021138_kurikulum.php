<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurikulum', function (Blueprint $table) {
            $table->string('kode_kurikulum')->primary();
            $table->string('kode_jurusan');
            $table->string('kode_mapel');
            $table->integer('jumlah_jam');

            //$table->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan');

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
        //
    }
};
