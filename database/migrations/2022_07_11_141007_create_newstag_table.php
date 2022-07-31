<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewstagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstag', function (Blueprint $table) {
            $table->foreignId('id_tag');
            $table->foreignId('id_news');
            $table->primary(['id_news', 'id_tag']);

            $table->foreign('id_news')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('id_tag')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newstag');
    }
}
