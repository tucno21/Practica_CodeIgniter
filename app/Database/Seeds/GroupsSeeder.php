<?php

namespace App\Database\Seeds;

use Faker\Factory;
use CodeIgniter\Database\Seeder;

class GroupsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $db      = \Config\Database::connect();


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

        //https://codeigniter4.github.io/userguide/database/query_builder.html#inserting-data
        $builder = $db->table('groups');
        $builder->insertBatch($group);
    }
}
