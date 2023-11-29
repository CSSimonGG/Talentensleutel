<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TalentensleutelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Talentensleutels= [


        ];

        foreach ($Talentensleutels as $Talentensleutel) {
            DB::table('Talentensleutels')->insert($Talentensleutel);
        }
    }
}
