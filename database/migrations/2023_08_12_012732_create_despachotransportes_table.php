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
        Schema::create('despachotransportes', function (Blueprint $table) {
            $table->id();
            $table->double('diario');
            $table->timestamps();

            $table->unsignedBigInteger('despacho_id');
            $table->unsignedBigInteger('transporte_id');
            $table->unsignedBigInteger('ciudade_id');

            $table->foreign('despacho_id')->references('id')->on('despachos')->onDelete('cascade');
            $table->foreign('transporte_id')->references('id')->on('transportes')->onDelete('cascade');
            $table->foreign('ciudade_id')->references('id')->on('ciudades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('despachotransportes');
    }
};
