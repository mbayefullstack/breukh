<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElevesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $eleves = [
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
      \App\Models\Eleves::insert($eleves);

    }
}
