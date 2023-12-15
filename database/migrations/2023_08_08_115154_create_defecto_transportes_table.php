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
        Schema::create('defecto_transportes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muestreo_id')->constrained()->onDelete('cascade');
            $table->foreignId('data_logistica_id')->constrained()->onDelete('cascade');
            $table->string('estado');
            $table->string('cantidad');
            $table->string('caja_uni');
            $table->string('lote');
            $table->string('observacion');
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
        Schema::dropIfExists('defecto_transportes');
    }
};
