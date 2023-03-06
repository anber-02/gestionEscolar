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
        Schema::create('grupo_alumno', function (Blueprint $table) {
            $table->unsignedBigInteger('id_alumno');
            $table->foreign('id_alumno')
                  ->references('id_alumno')
                  ->on('alumnos');
            $table->unsignedBigInteger('id_grupo');
            $table->foreign('id_grupo')
                  ->references('id_grupo')
                  ->on('grupos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_alumno');
    }
};
