<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncargadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombres');
            $table->string('cedula');
            $table->string('nivelEstudios');
            $table->string('hojaVida');
            $table->string('diplomaPDF');
            $table->string('cusr50_horas_PDF');
            $table->string('certificadoSeccionalSaludPDF');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encargado');
    }
}
