<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificaraccidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaraccidentes', function (Blueprint $table) {
            $table->id();

            $table->integer('valoracion');

            $table->unsignedBigInteger('transporte_id');
            $table->unsignedBigInteger('ciudade_id');

            $table->foreign('transporte_id')->references('id')->on('transportes')->onDelete('cascade');
            $table->foreign('ciudade_id')->references('id')->on('ciudades')->onDelete('cascade');
            
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
        Schema::dropIfExists('calificaraccidentes');
    }
}
