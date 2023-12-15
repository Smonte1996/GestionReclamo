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
        Schema::create('data_logisticas', function (Blueprint $table) {
            $table->id();
            $table->char('sku_quala', 100);
            $table->char('sku_unilever', 100);
            $table->string('cliente');
            $table->text('descripcion');
            $table->text('ean13');
            $table->text('ean14');
            $table->text('ean128');
            $table->string('registro_sanitario');
            $table->text('vida_util');
            $table->text('pvp');
            $table->double('cajas_plancha');
            $table->double('plancha_estibas');
            $table->string('marca');
            $table->double('cajas_estibas');
            $table->date('fecha_actualizacion');
            $table->string('origen')->nullable();
            $table->text('observacion')->nullable();
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
        Schema::dropIfExists('data_logisticas');
    }
};
