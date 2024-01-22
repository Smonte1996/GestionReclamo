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
        Schema::create('chcklt_contenedorytuberias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('info_checklist_id')->constrained()->onDelete('cascade');
            $table->foreignId('seco_frio_id');
            $table->foreignId('pasillo_id');
            $table->integer('cct');
            $table->string('ccto')->nullable();
            $table->integer('cct2');
            $table->string('ccto2')->nullable();
            $table->integer('cct3');
            $table->string('ccto3')->nullable();
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
        Schema::dropIfExists('chcklt_contenedorytuberias');
    }
};
