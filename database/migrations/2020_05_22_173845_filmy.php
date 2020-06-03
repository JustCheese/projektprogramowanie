<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Filmy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmy', function (Blueprint $table) {
            $table->id('id_film');
            $table->text('nazwa');
            $table->text('opis');
            $table->text('reżyser');
            $table->text('gatunek');
            $table->int('rok_premiery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmy');
    }
}
