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
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nit');
            $table->string('direccion');
            $table->string('telefono');

            $table->unsignedBigInteger('calificaraccidente_id');
            $table->unsignedBigInteger('calificardisponibilidade_id');
            $table->unsignedBigInteger('calificarentrega_id');

            $table->foreign('calificaraccidente_id')->references('id')->on('calificaraccidentes')->onDelete('cascade');
            $table->foreign('calificardisponibilidade_id')->references('id')->on('calificardisponibilidades')->onDelete('cascade');
            $table->foreign('calificarentrega_id')->references('id')->on('calificarentregas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportes');
    }
};
