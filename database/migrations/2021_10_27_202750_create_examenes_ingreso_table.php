<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenesIngresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes_ingreso', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ges');
            $table->string('cargo');
            $table->string('tareasRealiza');
            $table->string('herramientasUtiliza');
            $table->string('peligroCargo');
            $table->string('descripcionPeligro');
            $table->string('equiposProteccion');
            $table->string('examenesIngreso');
            $table->string('exmenesPeriodo');
            $table->string('examenesPostIncapacidad');
            $table->string('examenesEgreso');
            $table->string('condicionesSalud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examenes_ingreso');
    }
}
