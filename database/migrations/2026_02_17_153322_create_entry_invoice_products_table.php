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

        Schema::create('entry_invoice_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('entry_invoice_id')->constrained();
            $table->foreignUuid('product_id')->constrained();
            $table->double('quantity', 10, 2)->default('0.00');
            $table->double('unit_value', 10, 2)->default('0.00');
            $table->double('total_value', 10, 2)->default('0.00');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entry_invoice_products');
    }
};
