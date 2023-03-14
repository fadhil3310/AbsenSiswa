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
        Schema::create('guru_mengajar', function (Blueprint $table) {
            $table->string('kode_mengajar')->primary();
            $table->string('nip');
            $table->string('kode_kelas');
            $table->string('kode_mapel');
            $table->integer('hari');
            $table->integer('jam_ke');

            // $table->foreign('nip')->references('nip')->on('guru');
            // $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas');
            // $table->foreign('kode_mapel')->references('kode_mapel')->on('kurikulum');

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
