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

        Schema::create('harvest_releases', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('crop_id')->constrained();
            $table->foreignUuid('driver_id')->constrained();
            $table->foreignUuid('owner_id')->constrained();
            $table->foreignUuid('plot_field_id')->constrained();
            $table->foreignUuid('warehouse_id')->constrained();
            $table->foreignUuid('lanyard_id')->constrained();
            $table->foreignUuid('matrix_freight_id')->constrained();
            $table->date('release_date');
            $table->string('shipping_number');
            $table->string('control_number');
            $table->double('gross_weight', 10, 2)->default('0.00');
            $table->double('discount_weight', 10, 2)->default('0.00');
            $table->double('discount', 10, 2)->default('0.00');
            $table->double('net_weight', 10, 2)->default('0.00');
            $table->double('liquid_bags', 10, 2)->default('0.00');
            $table->double('gross_bags', 10, 2)->default('0.00');
            $table->double('shipping_value', 10, 2)->default('0.00');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harvest_releases');
    }
};
