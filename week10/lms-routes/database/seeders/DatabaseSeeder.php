<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Course::factory()->create([
            'courseID' => 'HTTP 5225',
            'name' => 'PHP',
        ]);

        Course::factory()->create([
            'courseID' => 'HTTP 5226',
            'name' => 'Back-End Development',
        ]);

        Course::factory()->create([
            'courseID' => 'HTTP 5222',
            'name' => 'Full-Stack Development',
        ]);

        Course::factory()->create([
            'courseID' => 'HTTP 5214',
            'name' => 'BrickMMO',
        ]);
    }
}
