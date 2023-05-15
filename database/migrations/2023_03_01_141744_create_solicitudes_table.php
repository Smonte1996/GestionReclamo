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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('correo');
            $table->string('celular');
            $table->string('cliente');
            $table->foreignId('sede_id')->constrained()->onDelete('cascade');
            $table->foreignId('tipo_reclamo_id')->constrained()->onDelete('cascade');
            $table->foreignId('servicio_ransa_id')->constrained()->onDelete('cascade');
            $table->char('codigo_generado',150);
            $table->foreignId('adicional_id')->constrained();
            $table->string('titulo');
            $table->text('Descripcion');
            $table->integer('estado');
            $table->string('imagen');
            $table->date('fecha_registro');
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
        Schema::dropIfExists('solicitudes');
    }
};
