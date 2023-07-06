<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        ],
        [
            "libelle_niveau" => "collège"
        ],
        [
          "libelle_niveau" => "lycée"
      ],

      ];
      \App\Models\Niveau::insert($niveau);
    }
}
