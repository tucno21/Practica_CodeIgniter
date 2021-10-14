<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GenerateSeeder extends Seeder
{
    public function run()
    {
        //https://codeigniter4.github.io/userguide/dbmgmt/seeds.html?highlight=seeder
        // LLAMAR A LOS SEEDER EN UNO SOLO
        $this->call('CountriesSeeder');
        $this->call('GroupsSeeder');
    }
}
