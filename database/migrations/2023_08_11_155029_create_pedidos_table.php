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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->double('flete');
            $table->double('cantidad');            
            $table->timestamps();

            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('ciudade_id');

            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('ciudade_id')->references('id')->on('ciudades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
