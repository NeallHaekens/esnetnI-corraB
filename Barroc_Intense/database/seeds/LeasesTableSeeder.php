<?php

use Illuminate\Database\Seeder;
use \App\lease;

class LeasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lease::insert([
            'lease_type_id' => 1,
            'customer_id'   => 8,
            'finance_id'    => 3,
        ]);
    }
}
