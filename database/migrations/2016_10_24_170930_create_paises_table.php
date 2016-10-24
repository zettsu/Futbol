<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->increments('pais_id');
            $table->string('pais_nombre');
            $table->json('pais_historico')->nullable();
            $table->string('pais_latitud')->nullable();
            $table->string('pais_longitud')->nullable();
            $table->string('pais_zona_horaria')->nullable();
            $table->timestamp('pais_created')->useCurrent();
            $table->timestamp('pais_modified')->nullable();
            $table->timestamp('pais_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paises');
    }
}
