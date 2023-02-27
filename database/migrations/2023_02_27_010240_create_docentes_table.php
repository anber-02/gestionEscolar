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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id("id_docente");
            $table->string("a_paterno");
            $table->string("a_materno");
            $table->string("nombre");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("email")->unique();
            $table->string("rfc");
            $table->string("curp");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
