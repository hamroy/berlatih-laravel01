<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->longText('isi');
            $table->dateTime('tanggal_dibuat', 0);       
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('profil_id');     
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('profil_id')->references('id')->on('profil')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_pertanyaan');
    }
}
