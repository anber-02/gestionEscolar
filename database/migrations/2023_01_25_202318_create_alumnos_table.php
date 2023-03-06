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
            $table->bigIncrements("id_alumno");
            $table->string("nombre");
            $table->string("a_paterno");
            $table->string("a_materno");
            $table->string("telefono");
            $table->string("matricula");
            $table->string("direccion");
            $table->string("email")->unique();
            $table->boolean("estado")->default(true);
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
