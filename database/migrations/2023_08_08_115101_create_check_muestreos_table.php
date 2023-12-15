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
        Schema::create('check_muestreos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muestreo_id')->constrained()->onDelete('cascade');
            $table->string('vr1');
            $table->string('vr2');
            $table->string('vr3');
            $table->string('vr4');
            $table->string('vr5');
            $table->string('vr6');
            $table->string('vr7');
            $table->string('vd1');
            $table->string('vd2');
            $table->string('vd3');
            $table->string('vd4');
            $table->string('vd5');
            $table->string('vd6');
            $table->string('vd7');
            $table->string('vd8');
            $table->string('vd9');
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
        Schema::dropIfExists('check_muestreos');
    }
};
