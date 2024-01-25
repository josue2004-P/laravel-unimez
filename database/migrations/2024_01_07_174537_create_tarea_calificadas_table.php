<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea_calificadas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("descripcion");
            $table->string("id_tarea");
            $table->string("id_alumno");
            $table->string("id_materia");
            $table->string("id_grupo");
            $table->string("id_parcial");
            $table->string("id_maestro");
            $table->boolean('calificada')->nullable()->default(true);
            $table->string("calificacion");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarea_calificadas');
    }
};
