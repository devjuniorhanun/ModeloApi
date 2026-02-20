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

        Schema::create('closing_releases', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('post_id')->constrained();
            $table->foreignUuid('product_id')->constrained();
            $table->date('release_date');
            $table->string('initial_closing');
            $table->string('final_closing');
            $table->string('quantity_output');
            $table->string('quantity_entries');
            $table->string('daily_stock');
            $table->string('ruler');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('closing_releases');
    }
};
