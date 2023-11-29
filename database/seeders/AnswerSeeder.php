<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Onduidelijk
        Answer::create([
            'answer' => 'Onduidelijk',
        ]);

        // Ja
        Answer::create([
            'answer' => 'Ja',
        ]);

        // Nee
        Answer::create([
            'answer' => 'Nee',
        ]);

        // Ja, zeker wel
        Answer::create([
            'answer' => 'Ja, zeker wel',
        ]);

        // Ja, enigzins
        Answer::create([
            'answer' => 'Ja, enigzins',
        ]);

        // Nee, niet of nauwelijks
        Answer::create([
            'answer' => 'Nee, niet of nauwelijks',
        ]);
    }
}
