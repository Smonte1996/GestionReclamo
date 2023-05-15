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
        Schema::create('analisis_efectos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitude_id')->constrained()->onDelete('cascade');
            $table->text('porque1')->nullable();
            $table->text('porque2')->nullable();
            $table->text('porque3')->nullable();
            $table->text('porque4')->nullable();
            $table->text('porque5')->nullable();
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
        Schema::dropIfExists('analisis_efectos');
    }
};
