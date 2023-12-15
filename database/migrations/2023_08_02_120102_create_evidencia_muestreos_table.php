<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidencia_muestreos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muestreo_id')->constrained()->onDelete('cascade');
            $table->foreignId('data_logistica_id')->constrained();
            $table->foreignId('tamano_muestra_id')->constrained();
            $table->foreignId('niveles_estandar_id')->constrained();
            $table->string('sku_quala');
            $table->string('cantidad');
            $table->string('vida_util');
            $table->date('fecha_elaboracion')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('lote_fecha');
            $table->string('pvp');
            $table->string('registro_sanitario');
            $table->string('etiqueta_producto');
            $table->foreignId('aql_defecto_id')->nullable()->constrained();
            $table->foreignId('defecto_id')->nullable()->constrained();
            $table->foreignId('matriz_defecto_id')->nullable()->constrained();
            $table->string('observacion')->nullable();
            $table->string('estatu_producto')->nullable();
            $table->string('cantidad_caja')->nullable();
            $table->string('caja_un')->nullable();
            $table->string('estado');
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
        Schema::dropIfExists('evidencia_muestreos');
    }
};
