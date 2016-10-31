<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*  Schema::create('jugadores', function (Blueprint $table) {
            $table->increments('jugador_id');
            $table->json('jugador_nombres')->nulleable();
            $table->json('jugador_apellidos')->nulleable();
            $table->integer('jugador_id_equipo_actual')->nulleable();
            $table->json('jugador_historial_equipos')->nulleable();
            $table->json('info_jugador')->nulleable();
            $table->timestamp('jugador_created')->useCurrent();
            $table->timestamp('jugador_modified')->nullable();
            $table->timestamp('jugador_deleted')->nullable();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //  Schema::dropIfExists('jugadores');
    }
}
