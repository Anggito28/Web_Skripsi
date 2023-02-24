<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTfIdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_idfs', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('sentiment');
            $table->string('document_list');
            $table->string('tf');
            $table->string('df');
            $table->string('idf');
            $table->string('tfidf');
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
        Schema::dropIfExists('tf_idfs');
    }
}
