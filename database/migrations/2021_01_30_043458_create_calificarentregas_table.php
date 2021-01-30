<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificarentregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificarentregas', function (Blueprint $table) {
            $table->id();

            $table->string('valoracion');

            $table->unsignedBigInteger('transporte_id');
            $table->unsignedBigInteger('ciudade_id');

            $table->foreign('transporte_id')->references('id')->on('transportes')->onDelete('casade');
            $table->foreign('ciudade_id')->references('id')->on('ciudades')->onDelete('casade');

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
        Schema::dropIfExists('calificarentregas');
    }
}
