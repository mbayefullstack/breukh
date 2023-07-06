<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Inscription;

class Eleve extends Model
{
    use HasFactory;

    public function __construct(){
        $this->numero = 12345;
    }

    public static function getNumeroEleve()
    {
        $numerosEtatUn = Eleve::where('etat', 1)
                              ->orderBy('numero', 'asc')
                              ->pluck('numero')
                              ->toArray();

        $dernierNumero = 0;
        foreach ($numerosEtatUn as $numero) {
            if ($numero > $dernierNumero + 1) {
                return $dernierNumero + 1;
            }
            $dernierNumero = $numero;
        }
        return $dernierNumero + 1;
    }

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'nom',
        'prenom',
        'date_born',
        'lieu_born',
        'sexe',
        'profil',
        'etat',
        'numero'
    ];
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'inscriptions');
    }


}
