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
        Schema::create('chcklt_frias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('info_checklist_id')->constrained()->onDelete('cascade');
            $table->foreignId('seco_frio_id')->constrained();
            $table->foreignId('pasillo_id')->constrained();
            $table->integer('bf1');
            $table->char('bfo1','255')->nullable();
            $table->integer('bf2');
            $table->char('bfo2','255')->nullable();
            $table->integer('bf3');
            $table->char('bfo3','255')->nullable();
            $table->integer('bf4');
            $table->char('bfo4','255')->nullable();
            $table->integer('bf5');
            $table->char('bfo5','255')->nullable();
            $table->integer('bf6');
            $table->char('bfo6','255')->nullable();
            $table->integer('bf7');
            $table->char('bfo7','255')->nullable();
            $table->integer('bf8');
            $table->char('bfo8','255')->nullable();
            $table->integer('bf9');
            $table->char('bfo9','255')->nullable();
            $table->integer('bf10');
            $table->char('bfo10','255')->nullable();
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
        Schema::dropIfExists('chcklt_frias');
    }
};
