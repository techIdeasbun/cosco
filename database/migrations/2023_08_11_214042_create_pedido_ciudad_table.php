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
        Schema::create('pedido_ciudad', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('ciudade_id');

            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('ciudade_id')->references('id')->on('ciudades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_ciudad');
    }
};
