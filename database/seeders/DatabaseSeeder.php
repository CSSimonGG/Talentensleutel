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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Roles for permissions seeder
        $this->call(RoleSeeder::class);

        // User seeder for admin, manager and user account
        $this->call(UserSeeder::class);

        // Answer seeder
        $this->call(AnswerSeeder::class);

        // Subject seeder
        $this->call(SubjectSeeder::class);

        // Question seeder
        $this->call(QuestionSeeder::class);

        // Reasoning seeder
        $this->call(ReasoningSeeder::class);
    }
}
