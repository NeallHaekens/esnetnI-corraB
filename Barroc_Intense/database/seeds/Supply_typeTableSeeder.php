<?php

use Illuminate\Database\Seeder;
use \App\supply_type;

class Supply_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        supply_type::insert([
            'title'=> 'Koffiemachine'
        ]);
        supply_type::insert([
            'title'=> 'Koffieboon'
        ]);
        supply_type::insert([
            'title'=> 'Gemalen koffieboon'
        ]);

    }
}
