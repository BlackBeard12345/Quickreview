<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewiewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('reviews')->truncate();

        $films = [];
        for ($i=0; $i < 30; $i++) {
             $films[] = [
                'film_id' =>  $faker->numberBetween(1,30),
                'user_id' =>  $faker->numberBetween(2,7),
                'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
                'desc' => $faker->sentence($nbWords = 30, $variableNbWords = true),
                'stars' => $faker->numberBetween(1,5),
                'created_at' => Carbon::now(),
            ];
        }

        DB::table('reviews')->insert($films);
    }
}
