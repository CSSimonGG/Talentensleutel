<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // question_type 0 = 'ja', 'nee'
        // question_type 1 = 'onduidelijk', 'Ja, zeker wel', 'Ja, enigzins', 'Nee, niet of nauwelijks'
        // question_type 2 = open question
        // question_type 3 = multiple choice (drop down)
        // question_type 4 = privacy question

        // 1
        Question::create([
            'subject_id' => '1', // Algemene Gegevens
            'question' => 'Naam Organisatie',
            'question_type' => '2',
        ]);

        // 2
        Question::create([
            'subject_id' => '1', // Algemene Gegevens
            'question' => 'Contactpersoon',
            'question_type' => '2',
        ]);

        // 3
        Question::create([
            'subject_id' => '1', // Algemene Gegevens
            'question' => 'Functie',
            'question_type' => '2',
        ]);

        // 4
        Question::create([
            'subject_id' => '1', // Algemene Gegevens
            'question' => 'Emailadres',
            'question_type' => '2',
        ]);

        // 5
        Question::create([
             'subject_id' => '1', // Algemene Gegevens
            'question' => 'Telefoonnummer',
            'question_type' => '2',
        ]);

        // 6
        Question::create([
             'subject_id' => '1', // Algemene Gegevens
            'question' => 'Standplaats',
            'question_type' => '2',
        ]);

        // 7
        Question::create([
             'subject_id' => '1', // Algemene Gegevens
            'question' => 'Branche',
            'question_type' => '3',
        ]);

        // 8
        Question::create([
            'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Wat is de omvang van uw organisatie?',
            'question_type' => '2',
        ]);

        // 9
        Question::create([
            'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Bent u aangesloten bij een CAO?',
            'question_type' => '0',
        ]);

        // 10
        // Only ask this question if the answer to 9 is yes
        Question::create([
             'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Bij welke CAO bent u aangesloten?',
            'question_type' => '2',
        ]);

        // 11
        Question::create([
            'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Hoeveel medewerkers hebben een tijdelijk dienstverband?',
            'question_type' => '2',
        ]);

        // 12
        Question::create([
             'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Zijn er leeftijdscategorieën die speciale aandacht vragen van directie of management? ',
            'question_type' => '0',
        ]);

        // 13
        Question::create([
             'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Hoeveel ongeschoolde medewerkers heeft u in dienst?',
            'question_type' => '2',
        ]);

        // 14
        Question::create([
             'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Welke vacatures zijn op dit moment moeilijk te vervullen?',
            'question_type' => '2',
        ]);

        // 15
        Question::create([
            'subject_id' => '2', // Bedrijfsinformatie
            'question' => 'Wie in uw organisatie is verantwoordelijk voor het thema leren en ontwikkelen?',
            'question_type' => '2',
        ]);

        // 16
        Question::create([
            'subject_id' => '3', // Missie
            'question' => 'Heeft uw organisatie een missie, visie en/of (kern)waarden?',
            'question_type' => '0',
        ]);

        // 17
        // Only ask this question if the answer to 16 is yes
        Question::create([
            'subject_id' => '3', // Missie
            'question' => 'Beschrijf de missie, visie en/of (kern) waarden van uw organisatie',
            'question_type' => '1',
        ]);

        // 18
        Question::create([
            'subject_id' => '4', // Heldere Focus
            'question' => 'Worden medewerkers betrokken bij het ontwerpen en verbeteren van interne processen?',
            'question_type' => '1',
        ]);

        // 19
        Question::create([
            'subject_id' => '4', // Heldere Focus
            'question' => 'Is leren in uw organisatie gericht op een bredere inzetbaarheid?',
            'question_type' => '1',
        ]);

        // 20
        Question::create([
            'subject_id' => '5', // Mix aan Leermogelijkheden
            'question' => 'Wordt formeel leren bewust ingezet?',
            'question_type' => '1',
        ]);

        // 21
        Question::create([
            'subject_id' => '5', // Mix aan Leermogelijkheden
            'question' => 'Wordt informeel leren bewust ingezet?',
            'question_type' => '1',
        ]);

        // 22
        Question::create([
            'subject_id' => '5', // Mix aan Leermogelijkheden
            'question' => 'Bent u bekend met verkorte opleidingen?',
            'question_type' => '1',
        ]);

        // 23
        Question::create([
            'subject_id' => '5', // Mix aan Leermogelijkheden
            'question' => 'Heeft u medewerkers die beschikken over specifieke kennis/vaardigheden die onmisbaar zijn?',
            'question_type' => '1',
        ]);

        // 24
        Question::create([
            'subject_id' => '6', // Meerjarig Beleid
            'question' => 'Heeft uw organisatie een HR - of personeelsbeleid?',
            'question_type' => '1',
        ]);

        // 25
        Question::create([
            'subject_id' => '6', // Meerjarig Beleid
            'question' => 'Wordt er binnen uw organisatie gebruik gemaakt van functie - en/of competentieprofielen?',
            'question_type' => '1',
        ]);

        // 26
        Question::create([
            'subject_id' => '6', // Meerjarig Beleid
            'question' => 'Heeft uw organisatie een gesprekscyclus waarin leren en/of ontwikkelen van medewerkers centraal staat (bijvoorbeeld functioneringsgesprekken of POP (Persoonlijk Ontwikkel Plan) gesprekken)?',
            'question_type' => '1',
        ]);

        // 27
        Question::create([
            'subject_id' => '6', // Meerjarig Beleid
            'question' => 'Heeft uw organisatie een introductiebeleid voor nieuwe medewerkers?',
            'question_type' => '1',
        ]);

        // 28
        Question::create([
            'subject_id' => '6', // Meerjarig Beleid
            'question' => 'Wordt de nieuwe medewerker (tijdelijk) gekoppeld aan een buddy/mentor?',
            'question_type' => '1',
        ]);

        // 29
        Question::create([
            'subject_id' => '6', // Meerjarig Beleid
            'question' => 'Heeft uw organisatie een ontwikkel- of professionaliseringsbeleid?',
            'question_type' => '1',
        ]);

        // 30
        Question::create([
            'subject_id' => '6', // Meerjarig Beleid
            'question' => 'Is er een koppeling gemaakt tussen de organisatiedoelstellingen en het beleid rondom leren en ontwikkelen?',
            'question_type' => '1',
        ]);

        // 31
        Question::create([
            'subject_id' => '7', // Inspirerend Leiderschap
            'question' => 'Zijn leidinggevenden getraind om het goede beoordelings-, functionerings- en/of persoonlijk ontwikkelgesprek te kunnen voeren?',
            'question_type' => '1',
        ]);

        // 32
        Question::create([
            'subject_id' => '7', // Inspirerend Leiderschap
            'question' => 'Hebben uw leidinggevenden zicht op de talenten (kennis, vaardigheden en skills) van de medewerkers?',
            'question_type' => '1',
        ]);

        // 33
        Question::create([
            'subject_id' => '7', // Inspirerend Leiderschap
            'question' => 'Zijn uw leidinggevenden bekend met de talenten en vaardigheden van uw medewerkers die zij inzetten buiten het werk om?',
            'question_type' => '1',
        ]);

        // 34
        Question::create([
            'subject_id' => '7', // Inspirerend Leiderschap
            'question' => 'Worden medewerkers door de organisatie gestimuleerd om zich verder te ontwikkelen?',
            'question_type' => '1',
        ]);

        // 35
        Question::create([
            'subject_id' => '7', // Inspirerend Leiderschap
            'question' => 'Besteden de direct leidinggevenden in uw organisatie veel aandacht aan het thema leren en ontwikkelen?',
            'question_type' => '1',
        ]);

        // 36
        Question::create([
            'subject_id' => '8', // Medewerker Centraal
            'question' => 'Worden leeractiviteiten afgestemd op de (individuele) behoeften van de medewerkers?',
            'question_type' => '1',
        ]);

        // 37
        Question::create([
            'subject_id' => '8', // Medewerker Centraal
            'question' => 'Heeft u medewerkers in uw organisatie van wie de kennis en/of vaardigheden niet meer up-to-date zijn om nu of in de toekomst naar behoren te kunnen functioneren?',
            'question_type' => '1',
        ]);

        // 38
        Question::create([
            'subject_id' => '8', // Medewerker Centraal
            'question' => 'Heeft u medewerkers in uw organisatie voor wie een training m.b.t. een van de volgende basis vaardigheden Nederlandse taal, rekenen of digitale vaardigheden, wenselijk zou zijn?',
            'question_type' => '1',
        ]);

        // 39
        Question::create([
            'subject_id' => '8', // Medewerker Centraal
            'question' => 'Zijn medewerkers zich ervan bewust dat ze eigen verantwoordelijkheid dragen voor het bijhouden van kennis en kunde?',
            'question_type' => '1',
        ]);

        // 40
        Question::create([
            'subject_id' => '8', // Medewerker Centraal
            'question' => 'Zijn medewerkers gemotiveerd om zichzelf actief verder te ontwikkelen?',
            'question_type' => '1',
        ]);

        // 41
        Question::create([
            'subject_id' => '9', // Leervoorzieningen
            'question' => 'Zijn er financiële voorzieningen voor leren?',
            'question_type' => '1',
        ]);

        // 42
        Question::create([
            'subject_id' => '9', // Leervoorzieningen
            'question' => 'Is uw organisatie bekend met de subsidies rondom leren en ontwikkelen?',
            'question_type' => '1',
        ]);

        // 43
        Question::create([
            'subject_id' => '9', // Leervoorzieningen
            'question' => 'Krijgen medewerkers binnen werktijd de gelegenheid om te leren en ontwikkelen?',
            'question_type' => '1',
        ]);

        // 44
        Question::create([
            'subject_id' => '9', // Leervoorzieningen
            'question' => 'Hebben medewerkers toegang tot leervoorzieningen (bijvoorbeeld een leer ruimte, laptop, boeken, oefenapparatuur of e-learning)?',
            'question_type' => '1',
        ]);

        // 45
        Question::create([
            'subject_id' => '9', // Leervoorzieningen
            'question' => 'Heeft uw organisatie (gekwalificeerde) praktijkbegeleiders in dienst?',
            'question_type' => '1',
        ]);

        // 46
        Question::create([
            'subject_id' => '9', // Leervoorzieningen
            'question' => 'Worden medewerkers begeleid bij hun leerproces?',
            'question_type' => '1',
        ]);

        // 47
        Question::create([
            'subject_id' => '10', // Gezonde & Energieke Werkomgeving
            'question' => 'Biedt uw organisatie vitaliteitsprogrammas of initiatieven aan te bevordering van de fysieke en/of mentale gezondheid van medewerkers?',
            'question_type' => '1',
        ]);

        // 48
        Question::create([
            'subject_id' => '10', // Gezonde & Energieke Werkomgeving
            'question' => 'Zijn er faciliteiten beschikbaar voor medewerkers om fysiek actief te zijn zoals wandelen, sporten en/of fietsen?',
            'question_type' => '1',
        ]);

        // 49
        Question::create([
            'subject_id' => '10', // Gezonde & Energieke Werkomgeving
            'question' => 'Worden medewerkers gestimuleerd om een goede werk-privébalans te behouden?',
            'question_type' => '1',
        ]);

        // 50
        Question::create([
            'subject_id' => '10', // Gezonde & Energieke Werkomgeving
            'question' => 'Heeft u medewerkers, die financieel niet of moeilijk rondkomen?',
            'question_type' => '0',
        ]);

        // 51
        Question::create([
            'subject_id' => '11', // Meetbare Leereffecten
            'question' => 'Wordt jaarlijks getoetst of een beoordelings- en/of ontwikkelgesprek is gevoerd?',
            'question_type' => '1',
        ]);

        // 52
        Question::create([
            'subject_id' => '11', // Meetbare Leereffecten
            'question' => 'Worden leerresultaten gemeten en geanalyseerd?',
            'question_type' => '1',
        ]);

        // 53
        Question::create([
            'subject_id' => '11', // Meetbare Leereffecten
            'question' => 'Wordt het (financieel) rendement van ontwikkelactiviteiten jaarlijks geëvalueerd?',
            'question_type' => '1',
        ]);

        // 54
        Question::create([
            'subject_id' => '11', // Meetbare Leereffecten
            'question' => 'Heeft u een softwaresysteem om de ontwikkelactiviteiten te registreren?',
            'question_type' => '1',
        ]);

        // 55
        Question::create([
            'subject_id' => '11', // Meetbare Leereffecten
            'question' => 'Vindt er op organisatieniveau minimaal 1 maal per jaar een zelfevaluatie plaats over leren en ontwikkelen?',
            'question_type' => '1',
        ]);

        // 56
        Question::create([
            'subject_id' => '11', // Meetbare Leereffecten
            'question' => 'Worden leeractiviteiten geëvalueerd?',
            'question_type' => '1',
        ]);

        // 57
        Question::create([
            'subject_id' => '12', // Kennis
            'question' => 'Bent u bekend met skills based matchen (Bij skills based matchen wordt er gekeken naar de kennis en vaardigheden van een kandidaat in plaats van het cv)?',
            'question_type' => '0',
        ]);

        // 58
        Question::create([
            'subject_id' => '12', // Kennis
            'question' => 'Wilt u meer informatie over skills based matchen?',
            'question_type' => '0',
        ]);

        // 59
        Question::create([
            'subject_id' => '12', // Kennis
            'question' => 'Bent u bekend met sociaal/inclusief ondernemen?',
            'question_type' => '0',
        ]);

        // 60
        Question::create([
            'subject_id' => '12', // Kennis
            'question' => 'Wilt u meer informatie over sociaal/inclusief ondernemen?',
            'question_type' => '0',
        ]);

        // 61
        Question::create([
            'subject_id' => '12', // Kennis
            'question' => 'Heeft u nog vragen of opmerkingen over deze vragenlijst?',
            'question_type' => '0',
        ]);

        // 62
        Question::create([
            'subject_id' => '12', // Kennis
            'question' => 'Privacyverklaring: https://zuidoostbrabant.leerwerkloket.nl/privacy',
            'question_type' => '4', // Privacy
        ]);
    }
}
