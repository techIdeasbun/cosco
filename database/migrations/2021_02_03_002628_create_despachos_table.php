<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
            $table->id();

            $table->dateTime('fechahora');
            $table->double('pesovacio');
            $table->double('pesolleno');
            $table->double('pesoneto');
            $table->string('controlo');
            $table->string('modalidad');
            
            $table->unsignedBigInteger('ciudade_id');
            $table->unsignedBigInteger('pedido_id');            
            $table->unsignedBigInteger('bodega_id')->nullable();            
            $table->unsignedBigInteger('bascula_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('ciudade_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');            
            $table->foreign('bodega_id')->references('id')->on('bodegas')->onDelete('cascade');            
            $table->foreign('bascula_id')->references('id')->on('basculas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('despachos');
    }
}
