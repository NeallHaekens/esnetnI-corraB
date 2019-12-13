<?php

use Illuminate\Database\Seeder;
use \App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*php artisan db:seed --class=RoleTableSeeder*/

    public function run()
    {
        Role::insert([
            'title'=> 'Admin'
        ]);
        Role::insert([
            'title'=> 'CEO'
        ]);
        Role::insert([
            'title'=> 'Finance'
        ]);
        Role::insert([
            'title'=> 'Supplier'
        ]);
        Role::insert([
            'title'=> 'Sales'
        ]);
        Role::insert([
        'title'=> 'Maintenance'
        ]);
        Role::insert([
            'title'=> 'Head-off Maintenance'
        ]);
        Role::insert([
            'title'=> 'Customer'
        ]);
    }
}
