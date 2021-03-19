<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();

            $table->string('muelle');
            $table->string('codigo');
            $table->double('cantidad');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('asignaciontransporte_id');
            $table->unsignedBigInteger('operadore_id');
            $table->unsignedBigInteger('supervisione_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('operadore_id')->references('id')->on('operadores')->onDelete('cascade');
            $table->foreign('supervisione_id')->references('id')->on('supervisiones')->onDelete('cascade');
            $table->foreign('asignaciontransporte_id')->references('id')->on('asignaciontransportes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
