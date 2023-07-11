<?php

namespace Database\Seeders;

use App\Models\Inscription;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inscriptions = [
            [
                "date_inscription" => "2000-07-08",
                "eleve_id" => 1,
                "classe_id" => 2,
                "annee_id" => 1
            ]
        ];
        Inscription::insert($inscriptions);
    }
}
