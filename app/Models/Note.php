<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'valeur',
        'inscription_id',
        'ponderation_id',
        'classe_semestre_id'
    ];
    public function inscription(): BelongsTo
    {
        return $this->belongsTo(Inscription::class);
    }

}


