<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTampilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_tampils', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_menu');

            $table->string('short');
            $table->unsignedInteger('id_tag');
            $table->string('link');
            $table->boolean('is_active')->default(TRUE);
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
        Schema::dropIfExists('tag_tampils');
    }
}
