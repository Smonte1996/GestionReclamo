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
        Schema::create('dissatisfaction_services', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->foreignId('activity_id')->constrained();
            $table->enum('notification_type',['ALERTA','NO CONFORMIDAD']);
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
        Schema::dropIfExists('dissatisfaction_services');
    }
};
