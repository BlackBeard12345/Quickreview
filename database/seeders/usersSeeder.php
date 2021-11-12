<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('users')->truncate();

        $admin = [
            'name' => 'lukasz',
            'surname' => 'markiewicz',
            'login' => 'pestka',
            'email' => 'lukasz@test.pl',
            'password' => 'test',
            'role' => '2',
        ];


        $user = [
            'name' => 'jan',
            'surname' => 'kowalski',
            'login' => 'jan',
            'email' => 'jan@test.pl',
            'password' => 'test',
            'role' => '1',
        ];

        $users = [];
        for ($i=0; $i < 5; $i++) {
            $users[] = [
                'name' => $faker->firstNameMale,
                'surname' => $faker->firstNameMale,
                'login' => $faker->firstNameMale,
                'email' =>  $faker->firstNameMale.'@test.pl',
                'password' => 'test',
                'role' => '1',
            ];
        }


        DB::table('users')->insert($admin);
        DB::table('users')->insert($user);
        DB::table('users')->insert($users);
    }
}
