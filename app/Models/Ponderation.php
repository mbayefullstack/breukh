<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ponderation extends Model
{
    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'maxNotes',
        'classe_id',
        'annee_id',
        'discipline_id',
        'evaluation_id'
    ];
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }

    public function discipline(): BelongsTo
    {
        return $this->belongsTo(Discipline::class);
    }

    public function annee(): BelongsTo
    {
        return $this->belongsTo(Annee::class);
    }

    public function evaluation(): BelongsTo
    {
        return $this->belongsTo(Evaluation::class);
    }

}

