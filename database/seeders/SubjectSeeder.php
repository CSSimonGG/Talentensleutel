<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 - Algemene Gegevens
        Subject::create([
            'subject' => 'Algemene Gegevens',
            'subject_logo_path' => '',
            'subject_description' => 'Algemene Gegevens',
        ]);

        // 2 - Bedrijfsinformatie
        Subject::create([
            'subject' => 'Bedrijfsinformatie',
            'subject_logo_path' => '',
            'subject_description' => 'Bedrijfsinformatie',
        ]);

        // 3 - Missie
        Subject::create([
            'subject' => 'Missie',
            'subject_logo_path' => '',
            'subject_description' => 'Missie',
        ]);

        // 4 - Heldere Focus
        Subject::create([
            'subject' => 'Heldere Focus',
            'subject_logo_path' => 'Focus.png',
            'subject_description' => 'Focus',
        ]);

        // 5 - Mix aan Leermogelijkheden
        Subject::create([
            'subject' => 'Mix aan Leermogelijkheden',
            'subject_logo_path' => 'Leermix.png',
            'subject_description' => 'Leermix',
        ]);

        // 6 - Meerjarig Beleid
        Subject::create([
            'subject' => 'Meerjarig Beleid',
            'subject_logo_path' => 'Meerjarig-beleid.png',
            'subject_description' => 'Meerjarig Beleid',
        ]);

        // 7 - Inspirerend Leiderschap
        Subject::create([
            'subject' => 'Inspirerend Leiderschap',
            'subject_logo_path' => 'Leiderschap.png',
            'subject_description' => 'Leiderschap',
        ]);

        // 8 - Medewerker Centraal
        Subject::create([
            'subject' => 'Medewerker Centraal',
            'subject_logo_path' => 'Medewerker.png',
            'subject_description' => 'Medewerker',
        ]);

        // 9 - Leervoorzieningen
        Subject::create([
            'subject' => 'Leervoorzieningen',
            'subject_logo_path' => 'Leervoorzieningen.png',
            'subject_description' => 'Leervoorzieningen',
        ]);

        // 10 - Gezonde & Energieke Werkomgeving
        Subject::create([
            'subject' => 'Gezonde & Energieke Werkomgeving',
            'subject_logo_path' => 'Werkomgeving.png',
            'subject_description' => 'Werkomgeving',
        ]);

        // 11 - Meetbare Leereffecten
        Subject::create([
            'subject' => 'Meetbare Leereffecten',
            'subject_logo_path' => 'Leereffecten.png',
            'subject_description' => 'Leereffecten',
        ]);

        // 12 - Kennis
        Subject::create([
            'subject' => 'Kennis',
            'subject_logo_path' => '',
            'subject_description' => 'Kennis',
        ]);
    }
}
