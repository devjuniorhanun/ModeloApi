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

        Schema::create('defensives', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('type_operation_id')->constrained();
            $table->foreignUuid('crop_id')->constrained();
            $table->foreignUuid('culture_id')->constrained();
            $table->foreignUuid('field_id')->constrained();
            $table->date('application_date');
            $table->double('pump_volume', 10, 3);
            $table->double('flow', 3);
            $table->double('ump_capacity', 10, 3);
            $table->double('recommended_pump', 10, 3)->nullable();
            $table->double('used_bomb', 10, 2)->nullable();
            $table->double('difference_bomb', 10, 2)->nullable();
            $table->double('applied_area', 10, 2)->nullable();
            $table->text('observation')->nullable();
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
        Schema::dropIfExists('defensives');
    }
};
