<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*php artisan db:seed --class=UsersTableSeeder*/
    public function run()
    {

        \App\User::insert([
            'role_id'       => 1,
            'name'          => 'admin',
            'email'         => 'admin@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);

        \App\User::insert([
            'role_id'       => 2,
            'name'          => 'ceo',
            'email'         => 'ceo@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);

        \App\User::insert([
            'role_id'       => 3,
            'name'          => 'finance',
            'email'         => 'finance@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);

         \App\User::insert([
            'role_id'       => 4,
            'name'          => 'supplies',
            'email'         => 'supplies@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);

        \App\User::insert([
            'role_id'       => 5,
            'name'          => 'sales',
            'email'         => 'sales@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);

        \App\User::insert([
            'role_id'       => 6,
            'name'          => 'maintenance',
            'email'         => 'maintenance@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);

        \App\User::insert([
            'role_id'       => 7,
            'name'          => 'customer',
            'email'         => 'customer@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);
    }
}
