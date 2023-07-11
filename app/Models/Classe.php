<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inscription;
use App\Models\Ponderation;


class Classe extends Model
{

    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'libelle_classe',
        'niveau_id'
    ];
    public function inscription()
    {
        return $this->hasMany(Inscription::class);
    }

    public function ponderation()
    {
        return $this->hasMany(Ponderation::class);
    }


}

