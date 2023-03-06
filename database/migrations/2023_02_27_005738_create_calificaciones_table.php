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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->bigIncrements("id_calif");
            $table->float("primer_parcial")->nullable();
            $table->float("segundo_parcial")->nullable();
            $table->float("tercer_parcial")->nullable();
            $table->float("promedio")->nullable();

            $table->unsignedBigInteger('id_materia');
            $table->foreign('id_materia')->references('id_materia')->on('materias');
            
            $table->unsignedBigInteger("id_alumno");
            $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');

            $table->unsignedBigInteger("id_docente");
            $table->foreign('id_docente')->references('id')->on('users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
