<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('nit');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('actividadEconomica');
            $table->string('nivelRiesfo');
            $table->string('cantidadTrabajadores');
            $table->string('naturalezaJuridica');
            $table->string('telefono');
            $table->string('tipoEmpresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
