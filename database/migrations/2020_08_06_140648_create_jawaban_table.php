<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->longText('isi');
            $table->unsignedBigInteger('profil_id');
            $table->unsignedBigInteger('pertanyaan_id');
            $table->foreign('profil_id')->references('id')->on('profil')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('jawaban');
    }
}
