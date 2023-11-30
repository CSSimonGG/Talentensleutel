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
        // Open vraag
        Answer::create([
            'answer' => 'Open vraag',
        ]);

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

        // Ik heb de privacyverklaring gelezen en ga hiermee akkoord
        Answer::create([
            'answer' => 'Ik heb de privacyverklaring gelezen en ga hiermee akkoord',
        ]);

        // Nee
        Answer::create([
            'answer' => 'Ik ga niet akkoord met de privacyverklaring (wij zullen uw persoonsgegevens verwijderen)',
        ]);
//
//        // Branche options
//        // Agrarisch en Groen
//        Answer::create([
//            'answer' => 'Agrarisch en Groen',
//        ]);
//
//        // Auto branche
//        Answer::create([
//            'answer' => 'Auto branche',
//        ]);
//
//        // Beveiliging
//        Answer::create([
//            'answer' => 'Beveiliging',
//        ]);
//
//        // Bouw
//        Answer::create([
//            'answer' => 'Bouw',
//        ]);
//
//        // Cultuur, sport en recreatie
//        Answer::create([
//            'answer' => 'Cultuur, sport en recreatie',
//        ]);
//
//        // Detailhandel
//        Answer::create([
//            'answer' => 'Detailhandel',
//        ]);
//
//        // Economisch-administratief
//        Answer::create([
//            'answer' => 'Economisch-administratief',
//        ]);
//
//        // Financiele Dienstverlening
//        Answer::create([
//            'answer' => 'Financiele Dienstverlening',
//        ]);
//
//        // Groothandel
//        Answer::create([
//            'answer' => 'Groothandel',
//        ]);
//
//        // Horeca
//        Answer::create([
//            'answer' => 'Horeca',
//        ]);
//
//        // ICT beroepen
//        Answer::create([
//            'answer' => 'ICT beroepen',
//        ]);
//
//        // Industrie
//        Answer::create([
//            'answer' => 'Industrie',
//        ]);
//
//        // Klantcontact
//        Answer::create([
//            'answer' => 'Klantcontact',
//        ]);
//
//        // Onderwijs
//        Answer::create([
//            'answer' => 'Onderwijs',
//        ]);
//
//        // Overheid
//        Answer::create([
//            'answer' => 'Overheid',
//        ]);
//
//        // Schoonmaak
//        Answer::create([
//            'answer' => 'Schoonmaak',
//        ]);
//
//        // Sociaal werk, Jeugdzorg en Kinderopvang
//        Answer::create([
//            'answer' => 'Sociaal werk, Jeugdzorg en Kinderopvang',
//        ]);
//
//        // Transport en Logistiek
//        Answer::create([
//            'answer' => 'Transport en Logistiek',
//        ]);
//
//        // Zorg
//        Answer::create([
//            'answer' => 'Zorg',
//        ]);
//
//        // Anders
//        Answer::create([
//            'answer' => 'Anders',
//        ]);
    }
}
