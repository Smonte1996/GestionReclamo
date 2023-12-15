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
        Schema::create('infor_practicahgs', function (Blueprint $table) {
            $table->id();
            $table->string('evaluador');
            $table->string('almacen');
            $table->date('fecha');
            $table->integer('estado');
            $table->string('solicitud');
            $table->string('Proveedor');
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
        Schema::dropIfExists('infor_practicahgs');
    }
};
