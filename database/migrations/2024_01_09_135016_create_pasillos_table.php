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
        Schema::create('pasillos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seco_frio_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id');
            $table->foreignId('warehouse_id');
            $table->char('coordinador', 255);
            $table->char('responsables', 255);
            $table->string('name');
            $table->string('estado');
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
        Schema::dropIfExists('pasillos');
    }
};
