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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->increments('jugador_id');
            $table->json('jugador_nombres')->nulleable();
            $table->json('jugador_apellidos')->nulleable();
            $table->integer('jugador_id_posicion')->nulleable();
            $table->integer('jugador_id_equipo_actual')->nulleable();
            $table->json('jugador_historial_equipos')->nulleable();
            $table->dateTime('jugador_fecha_nacimiento')->nulleable();
            $table->string('jugador_hash');
            $table->timestamp('jugador_created')->useCurrent();
            $table->timestamp('jugador_modified')->nullable();
            $table->timestamp('jugador_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
}
