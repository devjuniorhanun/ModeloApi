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
            $table->string('pump_volume');
            $table->string('flow');
            $table->string('ump_capacity');
            $table->string('recommended_pump_volume');
            $table->string('used_bomb');
            $table->string('difference_bomb');
            $table->string('applied_area');
            $table->text('observation');
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
