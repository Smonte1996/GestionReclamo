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
        Schema::create('chcklt_reefers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('info_checklist_id')->constrained()->onDelete('cascade');
            $table->foreignId('seco_frio_id');
            $table->foreignId('pasillo_id');
            $table->integer('br1');
            $table->char('bro1','255')->nullable();
            $table->integer('br2');
            $table->char('bro2','255')->nullable();
            $table->integer('br3');
            $table->char('bro3','255')->nullable();
            $table->integer('br4');
            $table->char('bro4','255')->nullable();
            $table->integer('br5');
            $table->char('bro5','255')->nullable();
            $table->integer('br6');
            $table->char('bro6','255')->nullable();
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
        Schema::dropIfExists('chcklt_reefers');
    }
};
