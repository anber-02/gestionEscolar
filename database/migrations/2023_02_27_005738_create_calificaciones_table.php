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
            $table->id("id_calif");
            $table->float("primer_parcial");
            $table->float("segundo_parcial");
            $table->float("tercer_parcial");
            $table->float("promedio");
            $table->foreignId("id_materia");
            $table->foreignId("id_alumno");
            $table->foreignId("id_profesor");
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
