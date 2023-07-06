<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semestre = [
            [
                "libelle" => "trimestre 1",
                "niveau_id" => "1"
            ],
            [
                "libelle" => "trimestre 2",
                "niveau_id" => "1"
            ],
            [
                "libelle" => "trimestre 3",
                "niveau_id" => "1"
            ],
            [
                "libelle" => "semestre 1",
                "niveau_id" => "2"
            ],
            [
                "libelle" => "semestre 2",
                "niveau_id" => "2"
            ],
            [
                "libelle" => "semestre 1",
                "niveau_id" => "3"
            ],
            [
                "libelle" => "semestre 2",
                "niveau_id" => "3"
            ],

        ];
        \App\Models\Semestre::insert($semestre);
    }
}
