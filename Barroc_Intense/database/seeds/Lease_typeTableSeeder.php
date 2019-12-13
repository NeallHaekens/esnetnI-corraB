<?php

use Illuminate\Database\Seeder;
use App\lease_type;

class Lease_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lease_type::insert([
            'period'=> 'Maandelijks'
        ]);
        lease_type::insert([
            'period'=> 'Periodiek'
        ]);
    }
}
