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
        Schema::create('entradas_multiples', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->unsignedBigInteger('tipo_entrada_id');
            $table->unsignedBigInteger('producto_id');
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('tipo_entrada_id')->references('id')->on('tipo_entradas');
            $table->foreign('producto_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas_multiples');
    }
};
