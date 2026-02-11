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
        Schema::table('evidencias', function (Blueprint $table) {
            // $table->unsignedBigInteger('criterios_evaluacion_id')->nullable();
            $table->foreignId('criterio_evaluacion_id')->after('estudiante_id')->constrained('criterios_evaluacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evidencias', function (Blueprint $table) {
            $table->dropColumn('criterio_evaluacion_id');
        });
    }
};
