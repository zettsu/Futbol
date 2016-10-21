<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadios', function (Blueprint $table) {
            $table->increments('estadio_id');
            $table->string('estadio_nombre')->nullable();
            $table->json('estadio_historico_partidos')->nullable();
            $table->dateTime('estadio_construido')->nullable();
            $table->timestamp('estadio_created')->useCurrent();
            $table->timestamp('estadio_modified')->nullable();
            $table->timestamp('estadio_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadios');
    }
}
