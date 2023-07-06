<?php

namespace Database\Seeders;
use App\Models\Evaluation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $evaluations = [
            [
                'libelle' => 'Examen',
            ],
            [
                'libelle' => 'Ressource',
            ]
        ];

        foreach ($evaluations as $evaluation) {
            Evaluation::create($evaluation);
        }
    }
}
