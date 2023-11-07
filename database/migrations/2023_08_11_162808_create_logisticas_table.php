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
        Schema::create('logisticas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('operadore_id');
            $table->unsignedBigInteger('bascula_id');
            $table->unsignedBigInteger('bodega_id');
            $table->unsignedBigInteger('supervisione_id');
            $table->unsignedBigInteger('estadohecho_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('operadore_id')->references('id')->on('operadores')->onDelete('cascade');
            $table->foreign('bascula_id')->references('id')->on('basculas')->onDelete('cascade');
            $table->foreign('bodega_id')->references('id')->on('bodegas')->onDelete('cascade');
            $table->foreign('supervisione_id')->references('id')->on('supervisiones')->onDelete('cascade');
            $table->foreign('estadohecho_id')->references('id')->on('estadohechos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logisticas');
    }
};
