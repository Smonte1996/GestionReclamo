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
        Schema::create('notification_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dissatisfaction_service_id')->constrained();
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->string('observations')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->dateTime('date_check')->nullable();
            $table->string('end_observations')->nullable();
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
        Schema::dropIfExists('notification_services');
    }
};
