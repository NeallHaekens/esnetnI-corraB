<?php

use Illuminate\Database\Seeder;
use \App\Malfunction;

class MalfunctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Malfunction::insert([
            'client_id'             => 8,
            'malfunction_type_id'   => 4,
            'description'           => "Er is schade aan de melkpomp kabel."
        ]);
    }
}
