<?php

use Illuminate\Database\Seeder;

class Supply_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\supply_type::insert([
            'title'=> 'Koffiemachine'
        ]);
        \App\supply_type::insert([
            'title'=> 'Koffieboon'
        ]);
        \App\supply_type::insert([
            'title'=> 'Gemalen koffieboon'
        ]);

    }
}
