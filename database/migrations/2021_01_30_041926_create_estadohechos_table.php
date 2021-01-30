<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadohechosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadohechos', function (Blueprint $table) {
            $table->id();

            $table->dateTime('fechahora');
            $table->text('observacion');
            
            $table->unsignedBigInteger('actividade_id');
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('supervisione_id');

            $table->foreign('actividade_id')->references('id')->on('actividades')->onDelete('casade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('casade');
            $table->foreign('supervisione_id')->references('id')->on('supervisiones')->onDelete('casade');

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
        Schema::dropIfExists('estadohechos');
    }
}
