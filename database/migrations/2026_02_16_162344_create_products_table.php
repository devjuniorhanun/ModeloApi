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

        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('product_group_id')->constrained();
            $table->foreignUuid('sub_group_product_id')->constrained();
            $table->string('name')->unique();
            $table->string('stock')->default('0.00');
            $table->string('stock_location');
            $table->string('minimum_quantity')->default('0.00');
            $table->string('drum_box')->default('0.00');
            $table->string('gallon_package')->default('0.00');
            $table->string('unit', 1)->default('K');
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
        Schema::dropIfExists('products');
    }
};
