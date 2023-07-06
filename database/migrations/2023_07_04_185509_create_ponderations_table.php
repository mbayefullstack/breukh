<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Annee;
use App\Models\Discipline;
use App\Models\Evaluation;
use App\Models\Classe;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ponderations', function (Blueprint $table) {
            $table->id();
            $table->float('maxNotes');
            $table->foreignIdFor(Classe::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Discipline::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Evaluation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Annee::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ponderations');
    }

};
