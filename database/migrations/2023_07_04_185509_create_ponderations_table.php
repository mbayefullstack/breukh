<?php

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Discipline;
use App\Models\Evaluation;
use App\Models\ClasseSemestre;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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
            $table->foreignIdFor(Classe::class)->constrained();
            $table->foreignIdFor(Discipline::class)->constrained();
            $table->foreignIdFor(Evaluation::class)->constrained();
            $table->foreignIdFor(Annee::class)->constrained();
            $table->foreignIdFor(ClasseSemestre::class)->constrained();
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
