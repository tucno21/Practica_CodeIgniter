<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \Faker\Factory;

class Inicio extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $db      = \Config\Database::connect();

        $counters = [];

        for ($i = 0; $i < 15; $i++) {
            $create_at = $faker->dateTime();
            $updated_at = $faker->dateTimeBetween($create_at);

            $counters[] = [
                'name' => $faker->country,
                'create_at' => $create_at->format('Y-m-d H:i:s'),
                'updated_at' => $updated_at->format('Y-m-d H:i:s'),
            ];
        }

        //https://codeigniter4.github.io/userguide/database/query_builder.html#inserting-data
        $builder = $db->table('countries');
        $builder->insertBatch($counters);


        $fecha = $faker->dateTime();
        $group = [
            [
                'name' => 'admin',
                'create_at' => $fecha->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeBetween($fecha)->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'user',
                'create_at' => $fecha->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeBetween($fecha)->format('Y-m-d H:i:s'),
            ],
        ];

        $builder = $db->table('groups');
        $builder->insertBatch($group);
    }
}
