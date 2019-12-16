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
        lease::insert([
            'lease_type_id' => 2,
            'customer_id'   => 26,
            'finance_id'    => 13,
        ]);
        lease::insert([
            'lease_type_id' => 1,
            'customer_id'   => 28,
            'finance_id'    => 3,
        ]);
        lease::insert([
            'lease_type_id' => 2,
            'customer_id'   => 29,
            'finance_id'    => 14,
        ]);
        lease::insert([
            'lease_type_id' => 2,
            'customer_id'   => 33,
            'finance_id'    => 14,
        ]);
        lease::insert([
            'lease_type_id' => 2,
            'customer_id'   => 36,
            'finance_id'    => 13,
        ]);
        lease::insert([
            'lease_type_id' => 1,
            'customer_id'   => 36,
            'finance_id'    => 14,
        ]);
        lease::insert([
            'lease_type_id' => 1,
            'customer_id'   => 34,
            'finance_id'    => 14,
        ]);
        lease::insert([
            'lease_type_id' => 1,
            'customer_id'   => 27,
            'finance_id'    => 14,
        ]);
        lease::insert([
            'lease_type_id' => 1,
            'customer_id'   => 30,
            'finance_id'    => 14,
        ]);
        lease::insert([
            'lease_type_id' => 2,
            'customer_id'   => 30,
            'finance_id'    => 13,
        ]);
        lease::insert([
            'lease_type_id' => 2,
            'customer_id'   => 30,
            'finance_id'    => 13,
        ]);
    }
}
