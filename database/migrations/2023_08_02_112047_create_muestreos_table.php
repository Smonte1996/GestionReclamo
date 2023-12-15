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
        Schema::create('muestreos', function (Blueprint $table) {
            $table->id();
            $table->string('bodega');
            $table->foreignId('client_id')->constrained();
            $table->string('contenedor');
            $table->string('guias');
            $table->date('fecha_recepcion');
            $table->time('hora_recepcion');
            $table->string('pvp');
            $table->string('n_pedido')->nullable();
            $table->string('responsable');
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
        Schema::dropIfExists('muestreos');
    }
};
