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
        Schema::create('empruntes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livre_id')->constrained('livres');
            $table->foreignId('client_id')->constrained('clients');
            $table->date('date_emprunt');
            $table->date('date_retour_prevue');
            $table->date('date_retour_reelle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empruntes');
    }
};
