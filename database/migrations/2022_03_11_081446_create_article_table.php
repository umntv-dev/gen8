<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedBigInteger('id_crews');
            $table->unsignedBigInteger('id_divisi');
            $table->dateTime('waktu');
            $table->string('image');
            $table->longText('description');
            $table->timestamps();

            $table->foreign('id_crews')->references('id')->on('crews');
            $table->foreign('id_divisi')->references('id')->on('divisi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
