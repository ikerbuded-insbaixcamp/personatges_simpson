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
        Schema::create('personatges', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('genero')->nullable();
            $table->string('ocupacion')->nullable();
            $table->integer('edad')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('estado')->nullable();
            $table->string('ruta_imagen')->nullable();
            $table->json('frases')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personatges');
    }
};
