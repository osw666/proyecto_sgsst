<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrizTrabajoAnualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriz_trabajo_anual', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('obejetivo');
            $table->string('metas');
            $table->string('alcance');
            $table->string('fechaCreacion');
            $table->string('recursos');
            $table->string('etapaCicloPhva');
            $table->string('estructuraSistemaGestion');
            $table->string('actividad');
            $table->string('responsables');
            $table->string('recuros');
            $table->string('periocidad');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriz_trabajo_anual');
    }
}
