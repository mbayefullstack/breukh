<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      $niveau = [
        [
            "libelle_niveau" => "primaire",
            "annee_id" => 1
        ],
        [
            "libelle_niveau" => "collège",
            "annee_id" => 1

        ],
        [
          "libelle_niveau" => "lycée",
          "annee_id" => 1

      ],

      ];
      Niveau::insert($niveau);
    }
}
