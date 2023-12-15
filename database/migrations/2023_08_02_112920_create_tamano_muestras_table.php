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
        Schema::create('tamano_muestras', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('niveles_estandar_id')->constrained();
            $table->string('nivel');
            $table->string('muestra')->nullable();
            $table->string('tamano_lote');
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
        Schema::dropIfExists('tamano_muestras');
    }
};
