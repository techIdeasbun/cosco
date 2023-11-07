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
        Schema::create('estadohechos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->text('observacion');
            $table->timestamps();

            $table->unsignedBigInteger('actividade_id');
            $table->unsignedBigInteger('despacho_id');

            $table->foreign('actividade_id')->references('id')->on('actividades')->onDelete('cascade');
            $table->foreign('despacho_id')->references('id')->on('despachos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadohechos');
    }
};
