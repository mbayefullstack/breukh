<?php

namespace Database\Seeders;

use App\Models\Annee;
use Database\Seeders\AnneeSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $annee = [
            ["libelle" => 2000-2001]
        ];
        Annee::insert($annee);
    }
}
