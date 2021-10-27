<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccionesPreventivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acciones_preventivas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fecha');
            $table->string('proceso');
            $table->string('descricionSituacion');
            $table->string('responsableSolicitud');
            $table->string('analisisCausas');
            $table->string('descripcionAccion');
            $table->string('fechaImplementacion');
            $table->string('fechaVerificacion');
            $table->string('observaciones');
            $table->string('estado');
            $table->string('eficacia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acciones_preventivas');
    }
}
