<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('email');
            $table->string('initial')->nullable();
            $table->string('tmpt_lhr')->nullable();
            $table->date('tgl_lhr')->nullable();
            $table->string('phone')->nullable();
            $table->text('almt_domisili')->nullable();
            $table->string('pendidikan')->nullable();
            $table->text('image')->nullable();
            $table->integer('total')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
