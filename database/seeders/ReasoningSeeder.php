<?php

namespace Database\Seeders;

use App\Models\Reasoning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReasoningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Question: 1, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '1',
            'reasoning' => '',
        ]);

        // Question: 2, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '2',
            'reasoning' => '',
        ]);

        // Question: 3, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '3',
            'reasoning' => '',
        ]);

        // Question: 4, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '4',
            'reasoning' => '',
        ]);

        // Question: 5, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '5',
            'reasoning' => '',
        ]);

        // Question: 6, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '6',
            'reasoning' => '',
        ]);

        // Question: 7, Answer: 1 (multiple choice)
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '7',
            'reasoning' => '',
        ]);

        // Question: 8, Answer: 1
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '8',
            'reasoning' => '',
        ]);

        // Question: 9, Answer: 3
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '9',
            'reasoning' => 'Ga naar 10',
        ]);

        // Question: 9, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '10',
            'reasoning' => 'Skip 10',
        ]);

        // Question: 10, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '10',
            'reasoning' => '',
        ]);

        // Question: 11, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '11',
            'reasoning' => '',
        ]);

        // Question: 12, Answer: 3
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '12',
            'reasoning' => 'Er zijn leeftijdscategorieën die speciale aandacht vragen van directie of management',
        ]);

        // Question: 12, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '12',
            'reasoning' => 'Geen leeftijdscategorieën die speciale aandacht vragen van directie of management',
        ]);

        // Question: 13, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '13',
            'reasoning' => '',
        ]);

        // Question: 14, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '14',
            'reasoning' => '',
        ]);

        // Question: 15, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '15',
            'reasoning' => '',
        ]);

        // Question: 16, Answer: 3
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '16',
            'reasoning' => 'Ga naar 17',
        ]);

        // Question: 16, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '16',
            'reasoning' => 'Skip 17',
        ]);

        // Question: 17, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '17',
            'reasoning' => '',
        ]);

        // Question: 18, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '18',
            'reasoning' => 'Medewerkers worden doorgaans betrokken bij het ontwerpen en/of verbeteren van interne processen.',
        ]);

        // Question: 18, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '18',
            'reasoning' => 'Medewerkers worden enigzins betrokken bij het ontwerpen en/of verbeteren van interne processen',
        ]);

        // Question: 18, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '18',
            'reasoning' => 'Medewerkers worden niet of nauwelijks betrokken bij het ontwerpen en/of verbeteren van interne processen',
        ]);

        // Question: 18, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '18',
            'reasoning' => 'Het is niet duidelijk of medewerkers betrokken worden bij het ontwerpen en/ of verbeteren van interne processen',
        ]);

        // Question: 19, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '19',
            'reasoning' => 'U zet instrument leren onder andere in om medewerkers breder inzetbaar te maken',
        ]);

        // Question: 19, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '19',
            'reasoning' => 'U zet instrument leren af en toe in om medewerkers breder inzetbaar te maken',
        ]);

        // Question: 19, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '19',
            'reasoning' => 'U zet instrument leren niet of nauwelijks in om medewerkers breder inzetbaar te maken',
        ]);

        // Question: 19, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '19',
            'reasoning' => 'Het is niet duidelijk of leren ingezet wordt om medewerkers breder inzetbaar te maken',
        ]);

        // Question: 20, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '20',
            'reasoning' => 'U zet instrument formeel leren bewust in',
        ]);

        // Question: 20, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '20',
            'reasoning' => 'U zet instrument formeel leren engzins bewust in',
        ]);

        // Question: 20, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '20',
            'reasoning' => 'U zet instrument formeel leren niet of nauwelijks bewust in',
        ]);

        // Question: 20, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '20',
            'reasoning' => 'Het is onduidelijk of formeel leren bewust wordt ingezet',
        ]);

        // Question: 21, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '21',
            'reasoning' => 'U zet instrument informeel leren bewust in',
        ]);

        // Question: 21, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '21',
            'reasoning' => 'U zet instrument informeel leren engzins bewust in',
        ]);

        // Question: 21, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '21',
            'reasoning' => 'U zet instrument informeel leren niet of nauwelijks bewust in',
        ]);

        // Question: 21, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '21',
            'reasoning' => 'Het is onduidelijk of formeel leren bewust wordt ingezet',
        ]);

        // Question: 22, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '22',
            'reasoning' => 'U bent bekend met verkorte opleidingen',
        ]);

        // Question: 22, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '22',
            'reasoning' => 'U bent enigszins bekend met verkorte opleidingen',
        ]);

        // Question: 22, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '22',
            'reasoning' => 'U is niet of nauwelijks bekend met verkorte opleidingen',
        ]);

        // Question: 22, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '22',
            'reasoning' => 'Het is onduidelijk of de organistie bekend is met verkorte opleidingen',
        ]);

        // Question: 23, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '23',
            'reasoning' => 'U heeft medewerkers in dienst die op basis van kennis/ vaardigheden onmisbaar zijn',
        ]);

        // Question: 23, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '23',
            'reasoning' => 'U heeft nauwelijks medewerkers in dienst die op basis van kennis/ vaardigheden onmisbaar zijn',
        ]);

        // Question: 23, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '23',
            'reasoning' => 'U heeft geen medewerkers in dienst die op basis van kennis/ vaardigheden onmisbaar zijn',
        ]);

        // Question: 23, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '23',
            'reasoning' => 'Het is onduidelijk of U medewerkers in dienst heeft die onmisbaar zijn',
        ]);

        // Question: 24, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '24',
            'reasoning' => 'U heeft een HR- of personeelsbeleid',
        ]);

        // Question: 24, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '24',
            'reasoning' => 'U heeft op een aantal onderwerpen een HR- of personeelsbeleid (of iets wat hierop lijkt)',
        ]);

        // Question: 24, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '24',
            'reasoning' => 'U heeft geen noemenswaardigHR- of  personeelsbeleid',
        ]);

        // Question: 24, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '24',
            'reasoning' => 'Het is onduidelijk of U  een HR- of personeelsbeleid heeft',
        ]);

        // Question: 25, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '25',
            'reasoning' => 'U werkt met functie- en/of competentieprofielen',
        ]);

        // Question: 25, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '25',
            'reasoning' => 'U werkt enigszins met functie- en/of competentieprofielen',
        ]);

        // Question: 25, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '25',
            'reasoning' => 'U werkt niet of nauwelijks met functie- en/of competentieprofielen',
        ]);

        // Question: 25, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '25',
            'reasoning' => 'Het is onduidelijk of de U  met functie- en/of competentieprofielen werkt',
        ]);

        // Question: 26, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '26',
            'reasoning' => 'Er wordt met een gesprekscyclus gewerkt, waarbij het leren en/ of ontwikkelen van medewerkers centraal staat',
        ]);

        // Question: 26, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '26',
            'reasoning' => 'Er wordt met een gesprekscyclus gewerkt, waarbij het leren en/ of ontwikkelen van medewerkers centraal staat maar de uitvoering is niet altijd consequent',
        ]);

        // Question: 26, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '26',
            'reasoning' => 'Er wordt er niet of nauwelijks met een gesprekscyclus gewerkt, waarbij het leren en/ of ontwikkelen van medewerkers centraal staat',
        ]);

        // Question: 26, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '26',
            'reasoning' => 'Het is onduidelijk of er in uw organisatie gewerkt wordt met een gesprekscyclus waarbij het leren en/ of ontwikkelen van medewerkers centraal staat',
        ]);

        // Question: 27, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '27',
            'reasoning' => 'U heeft een introductiebeleid voor nieuwe medewerkers',
        ]);

        // Question: 27, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '27',
            'reasoning' => 'U heeft een soort van introductiebeleid voor nieuwe medewerkers',
        ]);

        // Question: 27, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '27',
            'reasoning' => 'U heeft geen noemenswaardig introductiebeleid voor nieuwe medewerkers',
        ]);

        // Question: 27, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '27',
            'reasoning' => 'Het is onduidelijk of uw organisatie een introductiebeleid voor nieuwe medewerkers heeft',
        ]);

        // Question: 28, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '28',
            'reasoning' => 'U koppelt nieuwe medewerkers aan een buddy/mentor',
        ]);

        // Question: 28, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '28',
            'reasoning' => 'U koppelt sommige nieuwe medewerkers aan een buddy/mentor',
        ]);

        // Question: 28, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '28',
            'reasoning' => 'U koppelt nieuwe medewerkers (nog) niet aan een buddy/mentor',
        ]);

        // Question: 28, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '28',
            'reasoning' => 'Het is onduidelijk of de u nieuwe medewerkers koppelt aan een buddy/mentor',
        ]);

        // Question: 29, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '29',
            'reasoning' => 'U heeft een ontwikkel- of professionaliseringsbeleid voor nieuwe medewerkers',
        ]);

        // Question: 29, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '29',
            'reasoning' => 'U heeft een soort van ontwikkel- of professionaliseringsbeleid voor nieuwe medewerkers',
        ]);

        // Question: 29, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '29',
            'reasoning' => 'U heeft geen noemenswaardig ontwikkel- of professionaliseringsbeleid voor nieuwe medewerkers',
        ]);

        // Question: 29, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '29',
            'reasoning' => 'Het is onduidelijk of uw organisatie een ontwikkel- of professionaliseringsbeleid voor nieuwe medewerkers heeft',
        ]);

        // Question: 30, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '30',
            'reasoning' => 'U maakt een duidelijke koppeling tussen organisatie doelstellingen en het beleid rondom leren en ontwikkelen',
        ]);

        // Question: 30, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '30',
            'reasoning' => 'U maakt een af en toe een koppeling tussen de organisatie doelstellingen en het beleid rondom leren en ontwikkelen',
        ]);

        // Question: 30, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '30',
            'reasoning' => 'U maakt niet of nauwelijks een koppeling tussen organisatie doelstellingen en het beleid rondom leren en ontwikkelen',
        ]);

        // Question: 30, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '30',
            'reasoning' => 'Het is onduidelijk of er een koppeling maakt wordt tussen de organisatie doelstellingen en het beleid rondom leren en ontwikkelen',
        ]);

        // Question: 31, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '31',
            'reasoning' => 'Leidinggevenden zijn in staat om goede en inspirerende beoordlings-, functionerings- en/ of persoonlijke omtwikkelgesprekken te kunnen voeren',
        ]);

        // Question: 31, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '31',
            'reasoning' => 'Een aantal leidinggevenden zijn in staat om goede en inspirerende beoordelings-, functionerings- en/ of persoonlijke omtwikkelgesprekken te kunnen voeren',
        ]);

        // Question: 31, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '31',
            'reasoning' => 'De meeste leidinggevenden vinden het lastig om goede en inspirerende beoordelings-, functionerings- en/of persoonlijke ontwikkelgesprekken te voeren',
        ]);

        // Question: 31, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '31',
            'reasoning' => 'Het is onduidelijk of leidinggevenden goede en inspirerende beoordelings-, functionerings- en/of persoonlijke ontwikkelgesprekken kunnen voeren',
        ]);

        // Question: 32, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '32',
            'reasoning' => 'Leidinggevenden hebben zicht op de talenten (kennis, vaardigheden en skills) van hun medewerkers',
        ]);

        // Question: 32, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '32',
            'reasoning' => 'Sommige leidinggevenden hebben zicht op de talenten (kennis, vaardigheden en skills) van hun medewerkers',
        ]);

        // Question: 32, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '32',
            'reasoning' => 'De meeste leidinggevenden hebben weinig zicht op de talenten (kennis, vaardigheden en skills) van hun medewerkers',
        ]);

        // Question: 32, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '32',
            'reasoning' => 'Het is onduidelijk of leidinggevenden zicht hebben op de talenten (kennis, vaardigheden en skills) van hun medewerkers',
        ]);

        // Question: 33, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '33',
            'reasoning' => 'Leidinggevenden hebben zicht op de talenten en vaardigheden van hun medewerkers die zij inzetten buiten het werk om',
        ]);

        // Question: 33, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '33',
            'reasoning' => 'Sommige leidinggevenden hebben zicht op de talenten en vaardigheden van hun medewerkers die zij inzetten buiten het werk om',
        ]);

        // Question: 33, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '33',
            'reasoning' => 'De meeste leidinggevenden hebben weinig zicht op de talenten en vaardigheden van hun medewerkers die zij inzetten buiten het werk om',
        ]);

        // Question: 33, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '33',
            'reasoning' => 'Het is onduidelijk of leidinggevenden zicht hebben op de talenten en vaardigheden van hun medewerkers die zij inzetten buiten het werk om',
        ]);

        // Question: 34, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '34',
            'reasoning' => 'U stimuleert uw medewerkers om zich verder te ontwikkelen',
        ]);

        // Question: 34, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '34',
            'reasoning' => 'U stimuleert uw medewerkers om zich verder te ontwikkelen maar doet dit niet consequent',
        ]);

        // Question: 34, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '34',
            'reasoning' => 'U komt er niet aan toe om uw medewerkers te stimuleren zich te ontwikkelen',
        ]);

        // Question: 34, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '34',
            'reasoning' => 'Het is onbekend of binnen uw organisatie medewerkers worden gestimuleerd om zich verder te ontwikkelen',
        ]);

        // Question: 35, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '35',
            'reasoning' => 'Leidinggevenden hebben het onderwerp leren en ontwikkelen van hun medewerkers hoog op de agenda staan',
        ]);

        // Question: 35, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '35',
            'reasoning' => 'Leidinggevenden vinden het onderwerp leren en ontwikkelen van hun medewerkers belangrijker, maar komen er regelmatig niet aan toe ',
        ]);

        // Question: 35, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '35',
            'reasoning' => 'Bij leidinggevenden staat het onderwerp leren en ontwikkelen van hun medewerkers meestal niet hoog op de agenda',
        ]);

        // Question: 35, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '35',
            'reasoning' => 'Het is onbekend of leidinggevenden het onderwerp leren en ontwikkelen van hun medewerkers veel aandacht geven',
        ]);

        // Question: 36, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '36',
            'reasoning' => 'Leeractiviteiten worden afgestemd op de (individuele) behoeften van de medewerkers',
        ]);

        // Question: 36, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '36',
            'reasoning' => 'Leeractiviteiten worden soms afgestemd op de (individuele) behoeften van de medewerkers',
        ]);

        // Question: 36, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '36',
            'reasoning' => 'Leeractiviteiten worden zelden of niet afgestemd op de (individuele) behoeften van de medewerkers',
        ]);

        // Question: 36, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '36',
            'reasoning' => 'Het is onduidelijk of leeractiviteiten worden afgestemd op de (individuele) behoeften van de medewerkers',
        ]);

        // Question: 37, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '37',
            'reasoning' => 'U heeft meerdere medewerkers van wie de kennis en/of vaardigheden niet meer up-to-date zijn, om nu of in de toekomst, naar behoren te kunnen functioneren',
        ]);

        // Question: 37, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '37',
            'reasoning' => 'U heeft 1 of 2 medewerkers van wie de kennis en/of vaardigheden niet meer up-to-date zijn, om nu of in de toekomst, naar behoren te kunnen functioneren',
        ]);

        // Question: 37, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '37',
            'reasoning' => 'Al uw medewerkers beschikken over voldoende kennis en/of vaardigheden, om nu en in de toekomst, goed te functioneren',
        ]);

        // Question: 37, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '37',
            'reasoning' => 'Het is onduidelijk of al uw medewerkers, nu en in de toekomst, goed kunnen functioneren',
        ]);

        // Question: 38, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '38',
            'reasoning' => 'U heeft meerdere medewerkers voor wie een training op het gebied van taal, rekenen of digitale vaardigheden wenselijk zou zijn',
        ]);

        // Question: 38, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '38',
            'reasoning' => 'U heeft enkele medewerkers voor wie een training op het gebied van taal, rekenen of digitale vaardigheden wenselijk zou zijn',
        ]);

        // Question: 38, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '38',
            'reasoning' => 'U heeft geen medewerkers voor wie een training op het gebied van taal, rekenenen of digitale vaardigheden wenselijk zou zijn',
        ]);

        // Question: 38, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '38',
            'reasoning' => 'Het is niet duidelijk of u één of meerdere medewerkers heeft voor wie een training op het gebied van taal, rekenenen of digitale vaardigheden wenselijk zou zijn',
        ]);

        // Question: 39, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '39',
            'reasoning' => 'Medewerkers zijn zich ervan bewust dat ze eigen verantwoordelijkheid dragen voor het bijhouden van kennis en kunde',
        ]);

        // Question: 39, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '39',
            'reasoning' => 'Er zijn best een aantal medewerkers die zich er weinig van bewust zijn dat ze eigen verantwoordelijkheid dragen voor het bijhouden van kennis en kunde',
        ]);

        // Question: 39, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '39',
            'reasoning' => 'De meeste medewerkers zijn zich niet bewust dat ze eigen verantwoordelijkheid zouden moeten dragen voor het bijhouden van kennis en kunde',
        ]);

        // Question: 39, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '39',
            'reasoning' => 'Het is onduidelijk of medewerkers zich ervan bewust zijn dat ze eigen verantwoordelijkheid dragen voor het bijhouden van kennis en kunde',
        ]);

        // Question: 40, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '40',
            'reasoning' => '(Bijna) alle medewerkers zijn gemotiveerd om zichzelf actief verder te ontwikkelen ',
        ]);

        // Question: 40, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '40',
            'reasoning' => 'Een behoorlijk deel van de medewerkers is gemotiveerd om zichzelf actief verder te ontwikkelen',
        ]);

        // Question: 40, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '40',
            'reasoning' => 'Een behoorlijk deel van de medewerkers herkent het belang nog niet om zichzelf actief verder te ontwikkelen',
        ]);

        // Question: 40, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '40',
            'reasoning' => 'Het is onduidelijk of medewerkers gemotiveerd zijn om zichzelf verder te ontwikkelen',
        ]);

        // Question: 41, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '41',
            'reasoning' => 'Er zijn financiele voorzieningen beschikbaar om leren van medewerkers mogelijk te maken',
        ]);

        // Question: 41, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '41',
            'reasoning' => 'Er zijn financiele voorzieningen beschikbaar om leren van medewerkers mogelijk te maken, maar deze zijn niet voldoende om alle kosten te dekken',
        ]);

        // Question: 41, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '41',
            'reasoning' => 'Er zijn geen of zeer beperkte financiele voorzieningen beschikbaar om leren van medewerkers mogelijk te maken',
        ]);

        // Question: 41, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '41',
            'reasoning' => 'Het is onduidelijk of er financiele voorzieningen beschikbaar zijn om leren van medewerkers mogelijk te maken',
        ]);

        // Question: 42, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '42',
            'reasoning' => 'U bent bekend met de actuele subsidies op het gebied van leren en ontwikkelen',
        ]);

        // Question: 42, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '42',
            'reasoning' => 'U bent enigszins bekend met de actuele subsidies op het gebied van leren en ontwikkelen',
        ]);

        // Question: 42, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '42',
            'reasoning' => 'U bent niet of nauwelijks bekend met de actuele subsidies op het gebied van leren en ontwikkelen',
        ]);

        // Question: 42, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '42',
            'reasoning' => 'Het is onduidelijk of er binnen de U kennis aanwezig is over overactuele subsidies op het gebied van leren en ontwikkelen',
        ]);

        // Question: 43, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '43',
            'reasoning' => 'Medewerkers krijgen binnen werktijd de gelegenheid om te leren en te ontwikkelen',
        ]);

        // Question: 43, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '43',
            'reasoning' => 'Medewerkers krijgen af en toe de gelegenheid om binnen werktijd te leren en ontwikkelen',
        ]);

        // Question: 43, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '43',
            'reasoning' => 'Medewerkers krijgen niet of nauwelijks de gelegenheid om binnen werktijd te leren en ontwikkelen',
        ]);

        // Question: 43, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '43',
            'reasoning' => 'Het is onduidelijk of medewerkers de gelegenheid krijgen om binnen werktijd te leren en ontwikkelen',
        ]);

        // Question: 44, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '44',
            'reasoning' => 'Medewerkers hebben toegang tot leervoorzieningen als oefenapparatuur, computers, oefenruimte, etc.',
        ]);

        // Question: 44, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '44',
            'reasoning' => 'Medewerkers hebben beperkt toegang tot leervoorzieningen als oefenapparatuur, computers, oefenruimte, etc.',
        ]);

        // Question: 44, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '44',
            'reasoning' => 'Medewerkers hebben nauwelijks of geen toegang tot leervoorzieningen als oefenapparatuur, computers, oefenruimte, etc.',
        ]);

        // Question: 44, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '44',
            'reasoning' => 'Het is onduidelijk of medewerkers toegang hebben tot leervoorzieiningen',
        ]);

        // Question: 45, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '45',
            'reasoning' => 'U heeft één of meerdere praktijkbegeleiders in dienst',
        ]);

        // Question: 45, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '45',
            'reasoning' => 'U bent aan het onderzoeken of er een ervaren medewerker opgeleid kan worden tot (gekwalificeerd) praktijkopleider ',
        ]);

        // Question: 45, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '45',
            'reasoning' => '',
        ]);

        // Question: 45, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '45',
            'reasoning' => 'U heeft geen (gekwalificeerde) praktijkbegeleiders in dienst',
        ]);

        // Question: 46, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '46',
            'reasoning' => 'Leidinggevenden of ervaren medewerkers (coaches) begeleiden de leerpocessen van de medewerkers',
        ]);

        // Question: 46, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '46',
            'reasoning' => 'Op enkele plekken binnen de organisatie wordt er gewerkt met interne (leer)coaches en/of ervaringsdeskundigen om onervaren medewerkers te begeleiden in hun leerproces',
        ]);

        // Question: 46, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '46',
            'reasoning' => 'Binnen de organisatie wordt er niet of nauwelijks gewerkt met interne (leer)coaches of ervaringsdeskundigen om onervaren medewerkers te begeleiden in hun leerproces',
        ]);

        // Question: 46, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '46',
            'reasoning' => 'Het is onduidelijk of er binnen uw organisatie wordt gewerkt met interne (leer)coaches of ervaringsdeskundigen om onervaren medewerkers te begeleiden in hun leerproces',
        ]);

        // Question: 47, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '47',
            'reasoning' => 'U heeft binnen uw organisatie vitaliteitsprogrammas of andere initiatieven om de fysieke of mentale gezondheid van medewerkers te bevorderen',
        ]);

        // Question: 47, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '47',
            'reasoning' => 'U heeft beperkte vitaliteitsprogrammas of andere initiatieven om de fysieke of mentale gezondheid van medewerkers te bevorderen',
        ]);

        // Question: 47, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '47',
            'reasoning' => 'U heeft geen noemenswaardige vitaliteitsprogrammas of andere initiatieven om de fysieke of mentale gezondheid van medewerkers te bevorderen',
        ]);

        // Question: 47, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '47',
            'reasoning' => 'Het is onduidelijk of er binnen uw organisatie vitaliteitsprogrammas of andere initiatieven zijn om de fysieke of mentale gezondheid van medewerkers te bevorderen',
        ]);

        // Question: 48, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '48',
            'reasoning' => 'U heeft faciliteiten beschikbaar zodat medewerkers makkelijk kunnen wandelen, fietsen of sporten',
        ]);

        // Question: 48, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '48',
            'reasoning' => 'U heeft beperkte faciliteiten beschikbaar zodat medewerkers makkelijk kunnen wandelen, fietsen of sporten',
        ]);

        // Question: 48, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '48',
            'reasoning' => 'U heeft geen of zeer beperkte faciliteiten beschikbaar zodat medewerkers makkelijk kunnen wandelen, fietsen of sporten',
        ]);

        // Question: 48, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '48',
            'reasoning' => 'Het is onduidelijk of of er faciliteiten zijn om medewerkers makkelijk te kunnen laten wandelen, fietsen of sporten vanuit de werklocatie',
        ]);

        // Question: 49, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '49',
            'reasoning' => 'Medewerkers worden gestimuleerd om een gezonde werk-prive balans te behouden',
        ]);

        // Question: 49, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '49',
            'reasoning' => 'Medewerkers worden meestal gestimuleerd om een gezonde werk-prive balans te houden',
        ]);

        // Question: 49, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '49',
            'reasoning' => 'Medewerkers worden niet of nauwelijks gestimuleerd om een gezonde werk-prive balans te houden',
        ]);

        // Question: 49, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '49',
            'reasoning' => 'Het is onduidelijk of medewerkers gestimuleerd worden om een gezonde werk-prive balans te houden',
        ]);

        // Question: 50, Answer: 3
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '50',
            'reasoning' => 'U heeft waarschijnlijk medewerkers, die financieel moeilijk rond kunnen komen',
        ]);

        // Question: 50, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '50',
            'reasoning' => 'U heeft geen medewerkers , die financieel moeilijk rond kunnen komen',
        ]);

        // Question: 51, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '51',
            'reasoning' => 'Binnen de organisatie wordt er jaarlijks getoetst of er met alle medewerkers een beoordelings- en/of ontwikkelgesprek is gevoerd',
        ]);

        // Question: 51, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '51',
            'reasoning' => 'Binnen de organisatie wordt de voortgang van de beoordelings- en/of ontwikkelgesprekken wordt enigszins in de gaten gehouden',
        ]);

        // Question: 51, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '51',
            'reasoning' => 'Binnen de organisatie wordt de voortgang van de beoordelings- en/of ontwikkelgesprekken wordt niet of nauwelijks in de gaten gehouden',
        ]);

        // Question: 51, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '51',
            'reasoning' => 'Het is onbekend of de voortgang van de beoordelings- en/of ontwikkelgesprekken binnen uw organisatie in de gaten wordt gehouden',
        ]);

        // Question: 52, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '52',
            'reasoning' => 'Doorgaans worden (leer)resultaten gemeten en geanalyseerd, zodat hiervan geleerd kan worden bij de opzet of keuze van volgende leeractiviteiten',
        ]);

        // Question: 52, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '52',
            'reasoning' => 'Af en toe worden (leer)resultaten gemeten en geanalyseerd, zodat hiervan geleerd kan worden bij de opzet of keuze van volgende leeractiviteiten',
        ]);

        // Question: 52, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '52',
            'reasoning' => 'Doorgaans worden (leer)resultaten niet gemeten en geanalyseerd, zodat hiervan geleerd kan worden bij de opzet of keuze van volgende leeractiviteiten',
        ]);

        // Question: 52, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '52',
            'reasoning' => 'Het is onduidelijk of (leer)resultaten worden gemeten en geanalyseerd. waardoor er dus niet of hoogstzelden wordt geleerd bij de opzet of keuze van volgende leeractiviteiten',
        ]);

        // Question: 53, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '53',
            'reasoning' => 'Het (financieel) rendement van ontwikkelactiviteiten wordt jaarlijks geevalueerd',
        ]);

        // Question: 53, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '53',
            'reasoning' => 'Het (financieel) rendement van ontwikkelactiviteiten wordt af en toe geevalueerd',
        ]);

        // Question: 53, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '53',
            'reasoning' => 'Het (financieel) rendement van ontwikkelactiviteiten wordt zelden of niet geevalueerd',
        ]);

        // Question: 53, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '53',
            'reasoning' => 'Het is onduidelijk of het (financieel) rendement van ontwikkelactiviteiten wel eens geevalueerd wordt',
        ]);

        // Question: 54, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '54',
            'reasoning' => 'U heeft softwaresysteem om alle (afspraken rondom) ontwikkelactiviteiten vast te leggen',
        ]);

        // Question: 54, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '54',
            'reasoning' => 'U legt (afspraken rondom) ontwikkelactiviteiten meestal vast maar heeft hiervoor geen software- of E-HRM systeem',
        ]);

        // Question: 54, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '54',
            'reasoning' => 'U heeft geen softwaresysteem om alle (afspraken rondom) ontwikkelactiviteiten vast te leggen',
        ]);

        // Question: 54, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '54',
            'reasoning' => 'Het is onduidelijk of de U een softwaresysteem heeft om alle (afspraken rondom) ontwikkelactiviteiten vast te leggen',
        ]);

        // Question: 55, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '55',
            'reasoning' => 'U heeft een software/ E-HRM systeem om ontwikkelbehoeften en ectiviteiten van medewerkers vast te leggen',
        ]);

        // Question: 55, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '55',
            'reasoning' => 'U legt ontwikkelbehoeften en activiteiten van medewerkers vast maar heeft hiervoor geen specifiek software',
        ]);

        // Question: 55, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '55',
            'reasoning' => 'U leegt ontwikkelbehoeften en activiteiten van medewerkers niet of nauwelijks vast',
        ]);

        // Question: 55, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '55',
            'reasoning' => 'Het is niet bekend of ontwikkelbehoeften en -activiteiten van medewerkers worden vastgelegd in een softwaresysteem',
        ]);

        // Question: 56, Answer: 5 // Ja, zeker wel
        Reasoning::create([
            'answer_id' => '5',
            'question_id' => '56',
            'reasoning' => 'Binnen het managementoverleg van uw organisatie staat het onderwerp "leren en ontwikkelen" van alle medewerkers  minimaal één eer per jaar op de agenda',
        ]);

        // Question: 56, Answer: 6 // Ja, enigzins
        Reasoning::create([
            'answer_id' => '6',
            'question_id' => '56',
            'reasoning' => 'Het managementoverleg van uw organisatie bespreekt  vragen mbt "het leren en ontwikkelen van alle medewerkers" alleen op incidentale basis',
        ]);

        // Question: 56, Answer: 7 // Nee, niet of nauwelijks
        Reasoning::create([
            'answer_id' => '7',
            'question_id' => '56',
            'reasoning' => 'Het leren en ontwikkelen van alle medewerkers staat niet of nauwelijks op de agenda van directie of management',
        ]);

        // Question: 56, Answer: 2 // Onduidelijk
        Reasoning::create([
            'answer_id' => '2',
            'question_id' => '56',
            'reasoning' => 'Het is onduidelijk of leren en ontwikkelen van alle medewerkers op de agenda van directie of management staat',
        ]);

        // Question: 57, Answer: 3
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '57',
            'reasoning' => 'U bent bekend met skills based matchen',
        ]);

        // Question: 57, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '57',
            'reasoning' => 'U bent niet bekend met skills based matchen',
        ]);

        // Question: 58, Answer: 3
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '58',
            'reasoning' => 'U zou graag meer informatie over skills based matchen willen',
        ]);

        // Question: 58, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '58',
            'reasoning' => 'U heeft geen behoefte aan nadere informatie over skills based matchen',
        ]);

        // Question: 59, Answer: 3
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '59',
            'reasoning' => 'U bent bekend met sociaal/ inclusief ondernemen',
        ]);

        // Question: 59, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '59',
            'reasoning' => 'U bent niet bekend met sociaal/ inclusief ondernemen',
        ]);

        // Question: 60, Answer: 3
        Reasoning::create([
            'answer_id' => '3',
            'question_id' => '60',
            'reasoning' => 'U zou graag meer informatie over sociaal/ inclusief ondernemen willen',
        ]);

        // Question: 60, Answer: 4
        Reasoning::create([
            'answer_id' => '4',
            'question_id' => '60',
            'reasoning' => 'U heeft geen behoefte aan nadere informatie oversociaal/ inclusief ondernemen',
        ]);

        // Question: 61, Answer: 1
        Reasoning::create([
            'answer_id' => '1',
            'question_id' => '61',
            'reasoning' => '',
        ]);

        // Question: 62, Answer: 8 //Ik heb de privacyverklaring gelezen en ga hiermee akkoord
        Reasoning::create([
            'answer_id' => '8',
            'question_id' => '62',
            'reasoning' => 'Ik heb de privacyverklaring gelezen en ga hiermee akkoord.',
        ]);

        // Question: 62, Answer: 9 // Ik ga niet akkoord met de privacyverklaring (wij zullen uw persoonsgegevens verwijderen)
        Reasoning::create([
            'answer_id' => '9',
            'question_id' => '62',
            'reasoning' => 'Ik ga niet akkoord met de privacyverklaring (wij zullen uw persoonsgegevens verwijderen)',
        ]);
    }
}
