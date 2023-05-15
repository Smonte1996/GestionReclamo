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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('lastname',100);
            $table->string('identification_card',11)->unique();
            // $table->string('position',40);
            $table->boolean('leader')->default(false);
            $table->foreignId('parent_id')->nullable()->constrained('employees');
            $table->foreignId('warehouse_id')->constrained();
            $table->foreignId('departament_id')->constrained();
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

        Schema::dropIfExists('employees');

    }
};
