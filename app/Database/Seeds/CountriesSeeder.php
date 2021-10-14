<?php

namespace App\Database\Seeds;

use Faker\Factory;
use CodeIgniter\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $db      = \Config\Database::connect();

        $countries = [];

        for ($i = 0; $i < 15; $i++) {
            $create_at = $faker->dateTime();
            $updated_at = $faker->dateTimeBetween($create_at);

            $countries[] = [
                'name' => $faker->country,
                'create_at' => $create_at->format('Y-m-d H:i:s'),
                'updated_at' => $updated_at->format('Y-m-d H:i:s'),
            ];
        }

        //https://codeigniter4.github.io/userguide/database/query_builder.html#inserting-data
        $builder = $db->table('countries');
        $builder->insertBatch($counters);
    }
}
