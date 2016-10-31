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
    /*    Schema::create('partidos', function (Blueprint $table) {
            $table->increments('partido_id');
            $table->integer('partido_equipo_id_local')->nulleable();
            $table->integer('partido_equipo_id_visitante')->nulleable();
            $table->integer('partido_estadio_id')->nulleable();
            $table->dateTime('partido_inicio')->nulleable();
            $table->dateTime('partido_fin')->nulleable();
            $table->json('partido_images')->nullable();
            $table->json('partido_info')->nullable();
            $table->timestamp('partido_created')->useCurrent();
            $table->timestamp('partido_modified')->nullable();
            $table->timestamp('partido_deleted')->nullable();


        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('partidos');
    }
}
