<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreprocessingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preprocessings', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('sentiment');
            $table->string('cleaning');
            $table->string('casefolding');
            $table->string('tokenizing');
            $table->string('normalisasi');
            $table->string('stopword');
            $table->string('steeming');
            $table->string('cleaned');
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
        Schema::dropIfExists('preprocessings');
    }
}
