<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Bryan Monzon',
            'email' => 'monzonb@gmail.com',
            'timezone' => 'America/Los_Angeles',
            'weight_goal' => 160,
        ]);
    }
}
