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
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('initial')->nullable();
            $table->string('tmpt_lhr')->nullable();
            $table->date('tgl_lhr')->nullable();
            $table->string('telp')->nullable();
            $table->string('phone')->nullable();
            $table->string('ym')->nullable();
            $table->string('blog')->nullable();
            $table->text('almt_asal')->nullable();
            $table->text('almt_domisili')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->text('photo')->nullable();
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
