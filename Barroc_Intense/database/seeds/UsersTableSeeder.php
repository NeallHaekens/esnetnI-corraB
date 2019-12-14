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

        User::insert([
            'role_id'       => 1,
            'name'          => 'admin',
            'email'         => 'admin@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 2,
            'name'          => 'ceo',
            'email'         => 'ceo@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 3,
            'name'          => 'Head-Finance',
            'email'         => 'head-finance@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 4,
            'name'          => 'finance',
            'email'         => 'finance@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

         User::insert([
            'role_id'       => 5,
            'name'          => 'supplies',
            'email'         => 'supplies@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 6,
            'name'          => 'sales',
            'email'         => 'sales@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 7,
            'name'          => 'Head-off maintenance',
            'email'         => 'head-maintenance@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 8,
            'name'          => 'maintenance',
            'email'         => 'maintenance@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'customer',
            'email'         => 'customer@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        /*--------------------------------------------------------*/
        /*CEO's*/
        User::insert([
            'role_id'       => 2,
            'name'          => 'Joris Pulles',
            'email'         => 'jorispulles@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);
        User::insert([
            'role_id'       => 2,
            'name'          => 'Maarten Pulles',
            'email'         => 'maartenpulles@barroc.nl',
            'password'      => Hash::make('Barroc123')

        ]);



        /*Head-Finance*/
        User::insert([
            'role_id'       => 3,
            'name'          => 'Joris Pulles',
            'email'         => 'jorispullesfinance@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);



        /*Finance*/
        User::insert([
            'role_id'       => 4,
            'name'          => 'Ingeborg van Lier',
            'email'         => 'ingeborgvlier@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 4,
            'name'          => 'Ashley van de sluis',
            'email'         => 'ashleyvdsluis@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);


        /*Supplies*/
        User::insert([
            'role_id'       => 5,
            'name'          => 'John Vrees',
            'email'         => 'johnvrees@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 5,
            'name'          => 'Evelien Rosse',
            'email'         => 'evelienrosse@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);


        User::insert([
            'role_id'       => 5,
            'name'          => 'Max Roerdomp',
            'email'         => 'maxroerdomp@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);



        /*Sales*/
        User::insert([
            'role_id'       => 6,
            'name'          => 'Guillaume de Randamie',
            'email'         => 'guillaumedrandamie@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 6,
            'name'          => 'Annemie Meijaard',
            'email'         => 'annemiemeijaard@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);


        /*Head-Maintennace*/
        User::insert([
            'role_id'       => 7,
            'name'          => 'Simon Nagelkerke',
            'email'         => 'simonnagelkerke@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        /*Maintenance*/

        User::insert([
            'role_id'       => 8,
            'name'          => 'Muhammad Demir',
            'email'         => 'muhammaddemir@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 8,
            'name'          => 'Paul Machielsen',
            'email'         => 'paulmachielsen@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 8,
            'name'          => 'Cindy Passier',
            'email'         => 'cindypassier@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 8,
            'name'          => 'Piotr Loszarokwsi',
            'email'         => 'piotrloszarokwsi@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 8,
            'name'          => 'Jimmy Choi',
            'email'         => 'jimmychoi@barroc.nl',
            'password'      => Hash::make('Barroc123')
        ]);



        /*Customers*/
        User::insert([
            'role_id'       => 9,
            'name'          => 'Caitlan Mcmahon',
            'email'         => 'caitlanmcmahon@gmail.com',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Leen Osborne',
            'email'         => 'leenosborne123@yahoo.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Kyran Bray',
            'email'         => 'KyBray@gmail.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Lubna Wickens',
            'email'         => 'LWickens@outlook.com',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Pieter Hendricks',
            'email'         => 'cphendricks123@gmail.com',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Jeffery Austin',
            'email'         => 'austinjeffery@hotmail.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Taliah Ryder',
            'email'         => 'taliahmryder@gmail.com',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Linzi Pruitt',
            'email'         => 'linzipruitt@gmail.com',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Leigha Cameron',
            'email'         => 'cameronl@hotmail.com',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Aairah Jansen',
            'email'         => 'aairahjansen@live.nl',
            'password'      => Hash::make('Barroc123')
        ]);

        User::insert([
            'role_id'       => 9,
            'name'          => 'Judith Read',
            'email'         => 'judithread75@yahoo.com',
            'password'      => Hash::make('Barroc123')
        ]);
    }
}
