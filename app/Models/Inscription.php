<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inscription extends Model
{
    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'date_inscription',
        'eleves_id',
        'classe_id',
        'annees_id',
        'niveau_id'
    ];
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }

    public function eleve(): BelongsTo
    {
        return $this->belongsTo(Eleve::class);
    }

    public function annee(): BelongsTo
    {
        return $this->belongsTo(Annee::class);
    }

    public function niveau(): BelongsTo
    {
        return $this->belongsTo(Niveau::class);
    }
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function note(): HasMany
    {
        return $this->hasMany(Note::class);
    }

}
