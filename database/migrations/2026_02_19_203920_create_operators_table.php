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

        Schema::create('operators', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('defensive_id')->constrained('defensives');
            $table->foreignUuid('agriculturalOperator_id')->constrained();
            $table->foreignUuid('fleet_id')->constrained();
            $table->string('function');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operators');
    }
};
