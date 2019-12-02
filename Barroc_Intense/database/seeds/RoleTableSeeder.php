<?php

use Illuminate\Database\Seeder;

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
        \App\Role::insert([
            'title'=> 'Admin'
        ]);
        \App\Role::insert([
            'title'=> 'CEO'
        ]);
        \App\Role::insert([
            'title'=> 'Finance'
        ]);
        \App\Role::insert([
            'title'=> 'Supplier'
        ]);
        \App\Role::insert([
            'title'=> 'Sales'
        ]);
        \App\Role::insert([
        'title'=> 'Maintenance'
        ]);
        \App\Role::insert([
            'title'=> 'Customer'
        ]);
    }
}
