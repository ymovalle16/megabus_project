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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('identification')->unique();
            $table->foreignId('role_id')->constrained()->onDelete('cascade'); // BIGINT UNSIGNED
            $table->foreignId('status')->nullable()->constrained('statuses')->onDelete('set null');
            $table->date('license_expiration')->nullable();
            $table->string('bus_code', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dateTime('license_expiration')->nullable(false)->change();
        });
    }
};
