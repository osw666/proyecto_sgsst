<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrizCapacitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriz_capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('justificacion');
            $table->string('alcance');
            $table->string('objetivo');
            $table->string('indicadores');
            $table->string('fechaActualizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriz_capacitaciones');
    }
}
