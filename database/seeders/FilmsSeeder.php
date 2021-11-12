<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('films')->truncate();

        $films = [];
        for ($i=0; $i < 30; $i++) {
             $films[] = [
                'kind' => $faker->randomElement(['Dramat', 'Komedia', 'Horror', 'Dokumentalny', 'Romans', 'Przyrodniczy']),
                'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'producer' => $faker->firstNameMale,
                'stars' => $faker->numberBetween(1,5),
                'path' => $faker->randomElement(['/images/WCXCEAOOGhAp8RKiPU3JfOhnO3f5ijOd.jpg',
                                                '/images/x7a8UiVafqC3pFBMcvHxWs8kxaLrITyD.jpg',
                                                '/images/Y9qsPVz2RumEXVcHkNWPudx9eMEfNDMh.jpg',
                                                '/images/zxHFjW1AxtA6PnA6JvO61flumjFVE7aN.jpg']),
            ];
        }

        DB::table('films')->insert($films);
    }
}
