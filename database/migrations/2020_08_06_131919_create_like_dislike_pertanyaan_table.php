<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->integer('poin');
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
        Schema::dropIfExists('like_dislike_pertanyaan');
    }
}
