<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Transaction;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);
        for ($i = 0; $i < 4; $i++) {
            Account::create(
                [
                    'id' => $faker->numerify('###############'),
                    'nama' => $faker->firstName . ' ' . $faker->lastName,
                    'jenis' => $faker->randomElement(['Personal', 'Bisnis']),

                ]
            );
        }

        for ($i = 0; $i < 10; $i++) {
            Transaction::create(
                [
                    'kategori' => $faker->randomElement(['Beras', 'Gula', 'Rokok', 'Snack', 'Gas']),
                    'nominal' => $faker->randomDigit(),
                    'tujuan' => $faker->randomElement(['Andre', 'Anton', 'Budi', 'Cecep']),
                ]
            );
        }
    }
}
