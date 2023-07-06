<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Classe;
use App\Models\Semestre;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classe_semestres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Classe::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Semestre::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classe_semestres');
    }
};