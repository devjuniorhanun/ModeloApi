<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('fleets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('fleet_group_id')->constrained();
            $table->foreignUuid('fleet_brand_id')->constrained();
            $table->foreignUuid('fleet_model_id')->constrained();
            $table->string('name')->unique();
            $table->integer('code')->unique();
            $table->string('plate')->unique();
            $table->string('fleet_type', 1)->default('O');
            $table->string('year', 4);
            $table->string('chassi')->unique();
            $table->date('acquisition_date');
            $table->string('acquisition_value');
            $table->string('fuel_type', 1)->default('D');
            $table->string('marking_type', 1)->default('H');
            $table->string('starting_meter');
            $table->string('end_gauge');
            $table->string('status', 1)->default('A');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fleets');
    }
};
