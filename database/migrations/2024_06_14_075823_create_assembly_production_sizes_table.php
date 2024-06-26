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
        Schema::create('assembly_production_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('production_assembly_id');
            $table->foreignId('sizerun_id');
            $table->dateTime('started_work_time')->nullable();
            $table->dateTime('ended_work_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assembly_production_sizes');
    }
};
