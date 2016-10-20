<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_equipo_local')->nulleable();
            $table->integer('id_equipo_visitante')->nulleable();
            $table->string('id_estadio')->nulleable();
            $table->dateTime('fin')->nulleable();
            $table->dateTime('inicio')->nulleable();
            $table->timestamp('created')->useCurrent();
            $table->timestamp('modified')->nullable();
            $table->timestamp('deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
}
