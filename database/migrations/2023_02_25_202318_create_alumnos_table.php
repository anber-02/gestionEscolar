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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id("id_alumno");
            $table->string("nombre");
            $table->string("a_paterno");
            $table->string("a_materno");
            $table->string("matricula");
            $table->integer("edad");
            $table->string("direccion_alumno");
            $table->string("email_alumno")->unique();
            $table->string("telefono_alumno");
            $table->integer("grado");
            $table->string("nombre_tutor");
            $table->string("a_paterno_tutor");
            $table->string("a_materno_tutor");
            $table->string("email_tutor")->unique();
            $table->string("telefono_tutor");
            $table->string("direccion_tutor");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
