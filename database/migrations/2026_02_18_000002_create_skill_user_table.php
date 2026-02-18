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
        Schema::create('skill_user', function (Blueprint $table) {
            $table->id();

            // Claves foráneas
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->foreignId('skill_id')
                ->constrained('skills')
                ->onDelete('cascade');

            // Nivel de competencia en esta skill para este usuario
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced', 'Expert'])
                ->default('Intermediate');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_user');
    }
};
