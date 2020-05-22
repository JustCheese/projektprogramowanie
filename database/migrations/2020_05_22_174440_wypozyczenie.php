<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wypozyczenie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wypozyczenie', function (Blueprint $table) {
            $table->id('id_wypozyczenie');
            $table->integer('film_id');
            $table->integer('user_id');
            $table->date('data_wyp');
            $table->date('data_odd');
            $table->boolean('oddane');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wypozyczenie');
    }
}
