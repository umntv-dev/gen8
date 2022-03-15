<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_program');
            $table->integer('episode');
            $table->string('judul');
            $table->unsignedBigInteger('id_season');
            $table->longText('sipnosis');
            $table->string('image');
            $table->string('link');
            $table->timestamps();

            $table->foreign('id_program')->references('id')->on('program');
            $table->foreign('id_season')->references('id')->on('season');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode');
    }
}
