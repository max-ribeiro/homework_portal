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
        Schema::create('works_n_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('works_id')->constrained('works')->cascadeOnDelete();
            $table->foreignId('classes_id')->constrained('classes')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works_n_classes');
    }
};
