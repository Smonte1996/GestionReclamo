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
        Schema::create('aql_defectos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tamano_muestra_id')->constrained();
            $table->string('Aql');
            $table->string('Ac');
            $table->string('rec');
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
        Schema::dropIfExists('aql_defectos');
    }
};
