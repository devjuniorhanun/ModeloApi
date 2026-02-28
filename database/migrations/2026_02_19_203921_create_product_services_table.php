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

        Schema::create('product_services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('defensive_id')->constrained('defensives');
            $table->foreignUuid('agricultural_operator_id')->constrained();
            $table->foreignUuid('product_id')->constrained();
            $table->double('dose', 10, 3)->default('0.000');
            $table->double('pump', 10, 3)->default('0.00');
            $table->double('dose_used', 10, 3)->default('0.000');
            $table->double('pump_used', 10, 3)->default('0.000');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_services');
    }
};
