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
        Schema::create('grupo_materia_docentes', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('grupo_materia_docente_id');
            // $table->foreign('id_grupo')
            //       ->references('id_grupo')
            //       ->on('grupos');
            $table->string('grupo_materia_docente_type');
            // $table->foreign('id_docente')
            //       ->references('id')
            //       ->on('users');
            $table->unsignedBigInteger('materia_id_materia');
            $table->foreign('materia_id_materia')
                  ->references('id_materia')
                  ->on('materias');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_materia_docente');
    }
};
