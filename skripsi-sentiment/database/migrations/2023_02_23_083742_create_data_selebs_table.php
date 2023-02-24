<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSelebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_selebs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_seleb');
            $table->string('username');
            $table->string('following');
            $table->string('follower');
            $table->string('post');
            $table->string('photo');
            $table->string('kategori');
            $table->string('positif');
            $table->string('negatif');
            $table->string('neutral');

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
        Schema::dropIfExists('data_selebs');
    }
}
