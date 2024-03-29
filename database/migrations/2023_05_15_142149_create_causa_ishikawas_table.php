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
        Schema::create('causa_ishikawas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitude_id')->constrained()->onDelete('cascade');
            $table->string('categoria')->nullable();
            $table->text('causa')->nullable();
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
        Schema::dropIfExists('causa_ishikawas');
    }
};
