<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classe = [
            [
                "libelle_classe" => "CI A",
                "niveau_id" => "1"
            ], [
                "libelle_classe" => "CP A",
                "niveau_id" => "1"
            ],
            [
                "libelle_classe" => "6eme A",
                "niveau_id" => "2"
            ],
            [
                "libelle_classe" => "5eme A",
                "niveau_id" => "2"
            ],
            [
                "libelle_classe" => "2ndS A",
                "niveau_id" => "3"
            ],
            [
                "libelle_classe" => "2ndL A",
                "niveau_id" => "3"
            ],

        ];
        Classe::insert($classe);
    }
}
