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
            $table->double('stock', 10, 2)->default('0.00');
            $table->string('stock_location');
            $table->double('minimum_quantity', 10, 2)->default('0.00');
            $table->double('drum_box', 10, 2)->default('0.00');
            $table->double('gallon_package', 10, 2)->default('0.00');
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
