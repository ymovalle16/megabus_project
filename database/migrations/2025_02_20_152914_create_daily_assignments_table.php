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
        Schema::create('daily_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tab_id'); // ID de la ruta
            $table->unsignedBigInteger('operator_id'); // ID del operador
            $table->date('assignment_date'); // Fecha de la asignación
            $table->timestamps();

            // Claves foráneas
            $table->foreign('tab_id')->references('id')->on('tabs')->onDelete('cascade');
            $table->foreign('operator_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_assignments');
    }
};
