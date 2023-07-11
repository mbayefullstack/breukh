<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eleves = [
           
            "nom" => "SY",
            "prenom" => "Babacar",
            "datedenaissance" => "2000-12-06",
            "lieudenaissance" => "Dakar",
            "sexe" => "masculin",
            "profil" => "interne",
            "numero" => "1"
           
    
          ];
          Eleve::insert($eleves);
    }
}


