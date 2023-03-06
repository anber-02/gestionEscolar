<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumno_materia', function (Blueprint $table) {
            $table->unsignedBigInteger('materia_id_materia');
            $table->foreign('materia_id_materia')
                  ->references('id_materia')
                  ->on('materias')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('alumno_id_alumno');
            $table->foreign('alumno_id_alumno')
                  ->references('id_alumno')
                  ->on('alumnos')
                  ->onDelete('cascade');

            // $table->unsignedBigInteger('alumnos_grupo_id');
            // $table->foreign('alumnos_grupo_id')
            //       ->references('grupo_id')
            //       ->on('alumnos')
            //       ->onDelete('cascade');

            $table->timestamps();
            /**
             * materias_materia_id
             * estudiantes_estudiante_id
             * estudiantes_grupos_grupo_id
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos_materias');
    }
};
