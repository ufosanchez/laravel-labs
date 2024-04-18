<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
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
            'name' => 'Arnulfo Sanchez Pena',
            'email' => 'arnulfo@test.com',
            'password' => 'Test123!',
        ]);



        Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5225'
        ]);
        Course::factory()->create([
            'courseName' => 'Javascript',
            'courseID' => 'HTTP5226'
        ]);
        Course::factory()->create([
            'courseName' => 'React',
            'courseID' => 'HTTP5227'
        ]);


        
        Student::factory(20)->create();
    }
}
