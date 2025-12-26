<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Task::factory(10)->create([
            "title"=>fake()->randomElement([
                "take a shit", 
                "eat", 
                "dish up", 
                "cooking", 
                "jacking off", 
                "jacking off 15 times a day", 
                "make video for youtbe why mastuurbation can destroy life"
            ]),
            "deadline"=>fake()->date("Y-m-d"),
            "priority"=>fake()->randomElement(["low", "medium", "high"]),
            "completed"=>false 
        ]);
    }
}
