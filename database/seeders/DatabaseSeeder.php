<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Evenement;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User2',
            'email' => 'user2@uwezo.dev',
        ]);
        Evenement::factory()->create([
            'title'=> 'Slam Show à Kin Elubu',
            'description'=> 'Slam Show à Kin Elubu',
            'location'=> 'Slam Show à Kin Elubu',
            'start_date'=> date('2024-12-11 08:38'),
            'end_date'=> date('2024-12-11 08:38'),
            'image_path'=> 'Slam Show à Kin Elubu',
            'status'=> 'completed',
            'author_id'=> \App\Models\User::factory(),
        ]);
    }
}
