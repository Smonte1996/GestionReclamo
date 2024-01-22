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
        Schema::create('chcklt_bodegayperimetros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('info_checklist_id')->constrained()->onDelete('cascade');
            $table->foreignId('seco_frio_id');
            $table->foreignId('pasillo_id');
            $table->integer('bp1');
            $table->string('bpo1')->nullable();
            $table->integer('bp2');
            $table->string('bpo2')->nullable();
            $table->integer('bp3');
            $table->string('bpo3')->nullable();
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
        Schema::dropIfExists('chcklt_bodegayperimetros');
    }
};
