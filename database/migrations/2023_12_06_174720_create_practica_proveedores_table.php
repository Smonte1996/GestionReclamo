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
        Schema::create('practica_proveedores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('infor_practicahg_id')->constrained()->onDelete('cascade');
            $table->string('supervisor');
            $table->string('proveedor');
            $table->string('personal');
            $table->integer('puc');
            $table->string('puc1')->nullable();
            $table->string('puc2')->nullable();
            $table->date('puc3')->nullable();
            $table->integer('pbl');
            $table->string('pbl1')->nullable();
            $table->string('pbl2')->nullable();
            $table->date('pbl3')->nullable();
            $table->integer('pcl');
            $table->string('pcl1')->nullable();
            $table->string('pcl2')->nullable();
            $table->date('pcl3')->nullable();
            $table->integer('pcp');
            $table->string('pcp1')->nullable();
            $table->string('pcp2')->nullable();
            $table->date('pcp3')->nullable();
            $table->integer('pna');
            $table->string('pna1')->nullable();
            $table->string('pna2')->nullable();
            $table->date('pna3')->nullable();
            $table->integer('pul');
            $table->string('pul1')->nullable();
            $table->string('pul2')->nullable();
            $table->date('pul3')->nullable();
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
        Schema::dropIfExists('practica_proveedores');
    }
};
