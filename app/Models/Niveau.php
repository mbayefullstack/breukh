<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;
use App\Traits\JoinQueryParams;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Inscription;

class Niveau extends Model
{

    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'libelle_niveau',
    ];
    use HasFactory;

    public function Classes() : HasMany
    {
        return $this->hasMany(Classe::class);
    }
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

}
