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
        Schema::create('practicahgs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('infor_practicahg_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('employee_id')->constrained();
            $table->integer('uc');
            $table->string('uc1')->nullable();
            $table->string('uc2')->nullable();
            $table->date('uc3')->nullable();
            $table->integer('bl');
            $table->string('bl1')->nullable();
            $table->string('bl2')->nullable();
            $table->date('bl3')->nullable();
            $table->integer('cl');
            $table->string('cl1')->nullable();
            $table->string('cl2')->nullable();
            $table->date('cl3')->nullable();
            $table->integer('cp');
            $table->string('cp1')->nullable();
            $table->string('cp2')->nullable();
            $table->date('cp3')->nullable();
            $table->integer('na');
            $table->string('na1')->nullable();
            $table->string('na2')->nullable();
            $table->date('na3')->nullable();
            $table->integer('ul');
            $table->string('ul1')->nullable();
            $table->string('ul2')->nullable();
            $table->date('ul3')->nullable();
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
        Schema::dropIfExists('practicahgs');
    }
};
