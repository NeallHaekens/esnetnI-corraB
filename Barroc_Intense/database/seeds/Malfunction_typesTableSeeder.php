<?php

use Illuminate\Database\Seeder;
use \App\Malfunction_type;

class Malfunction_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Malfunction_type::insert([
            'title' => 'Lekkage'
        ]);

        Malfunction_type::insert([
            'title' => 'Foutmelding'
        ]);

        Malfunction_type::insert([
            'title' => 'Storing'
        ]);

        Malfunction_type::insert([
            'title' => 'Schade'
        ]);
    }
}
