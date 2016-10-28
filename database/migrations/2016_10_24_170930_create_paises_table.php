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
            $table->json('pais_images')->nullable();
            $table->json('pais_historico')->nullable();
            $table->json('pais_info')->nullable();
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
