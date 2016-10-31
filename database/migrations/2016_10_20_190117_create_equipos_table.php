<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  /*      Schema::create('equipos', function (Blueprint $table) {
            $table->increments('equipo_id');
            $table->string('equipo_nombre')->unique();
            $table->integer('equipo_pais_id')->nulleable();
            $table->json('equipo_images')->nullable();
            $table->json('equipo_info')->nullable();
            $table->timestamp('equipo_created')->useCurrent();
            $table->timestamp('equipo_modified')->nullable();
            $table->timestamp('equipo_deleted')->nullable();

        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //  Schema::dropIfExists('equipos');
    }
}
