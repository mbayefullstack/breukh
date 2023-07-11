<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


