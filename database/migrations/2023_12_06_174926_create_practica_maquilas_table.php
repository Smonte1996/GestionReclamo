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
        Schema::create('practica_maquilas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('infor_practicahg_id')->constrained()->onDelete('cascade');
            $table->string('Supervisor');
            $table->string('personal');
            $table->integer('muc');
            $table->string('muc1')->nullable();
            $table->string('muc2')->nullable();
            $table->date('muc3')->nullable();
            $table->integer('mbl');
            $table->string('mbl1')->nullable();
            $table->string('mbl2')->nullable();
            $table->date('mbl3')->nullable();
            $table->integer('mcl');
            $table->string('mcl1')->nullable();
            $table->string('mcl2')->nullable();
            $table->date('mcl3')->nullable();
            $table->integer('mcp');
            $table->string('mcp1')->nullable();
            $table->string('mcp2')->nullable();
            $table->date('mcp3')->nullable();
            $table->integer('mna');
            $table->string('mna1')->nullable();
            $table->string('mna2')->nullable();
            $table->date('mna3')->nullable();
            $table->integer('mul');
            $table->string('mul1')->nullable();
            $table->string('mul2')->nullable();
            $table->date('mul3')->nullable();
            $table->integer('mnp');
            $table->string('mnp1')->nullable();
            $table->string('mnp2')->nullable();
            $table->date('mnp3')->nullable();
            $table->integer('mml');
            $table->string('mml1')->nullable();
            $table->string('mml2')->nullable();
            $table->date('mml3')->nullable();
            $table->integer('mnaa');
            $table->string('mnaa1')->nullable();
            $table->string('mnaa2')->nullable();
            $table->date('mnaa3')->nullable();
            $table->integer('mub');
            $table->string('mub1')->nullable();
            $table->string('mub2')->nullable();
            $table->date('mub3')->nullable();
            $table->integer('mcb');
            $table->string('mcb1')->nullable();
            $table->string('mcb2')->nullable();
            $table->date('mcb3')->nullable();
            $table->integer('mbe');
            $table->string('mbe1')->nullable();
            $table->string('mbe2')->nullable();
            $table->date('mbe3')->nullable();
            $table->integer('mhg');
            $table->string('mhg1')->nullable();
            $table->string('mhg2')->nullable();
            $table->date('mhg3')->nullable();
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
        Schema::dropIfExists('practica_maquilas');
    }
};
