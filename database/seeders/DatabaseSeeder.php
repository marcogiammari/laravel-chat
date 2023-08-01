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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Marco',
            'email' => 'marcogiammari@gmail.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Luca',
            'email' => 'luca@email.com',
        ]);
    }
}
