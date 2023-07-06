<?php

namespace Database\Seeders;
use App\Models\Discipline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $disciplines = [
            [
                'libelle' => 'Mathématiques',
                'code' => 'MATH',
            ],
            [
                'libelle' => 'Français',
                'code' => 'FR',
            ],
             [
                'libelle' => 'Anglais',
                'code' => 'ANG',
            ],
            [
                'libelle' => 'Sport',
                'code' => 'SP',
            ],
        ];

        foreach ($disciplines as $discipline) {
            Discipline::create($discipline);
        }
    }
}
