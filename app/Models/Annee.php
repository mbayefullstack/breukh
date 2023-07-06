<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inscription;
use App\Models\Ponderation;

class Annee extends Model
{
    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'libelle'
    ];
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function ponderation()
    {
        return $this->hasMany(Ponderation::class);
    }

}
