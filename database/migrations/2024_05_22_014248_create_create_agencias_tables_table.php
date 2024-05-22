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
        Schema::create('agencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_agencia')->nullable();
            $table->string('ruc')->nullable();
            $table->string('no_registro')->nullable();
            $table->string('direccion')->nullable();
            $table->string('codigo_pais')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('pagina_web')->nullable();
            $table->string('nombre_representante')->nullable();
            $table->string('identificacion_representante')->nullable();
            $table->string('telefono_representante')->nullable();
            $table->string('email_representante')->nullable();
            $table->enum('tipo_agencia', ['minorista', 'mayorista'])->nullable();
            $table->string('url_declaracion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_agencias_tables');
    }
};
