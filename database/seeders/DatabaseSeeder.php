<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // NiveauSeeder::class,
            // ClasseSeeder::class,
            // InscriptionSeeder::class,
            // AnneeSeeder::class,
            // DisciplineSeeder::class,
            // EleveSeeder::class,
            EvaluationSeeder::class,
            // SemestreSeeder::class,
            // SemestreSeeder::class

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
