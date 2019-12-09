<?php

use Illuminate\Database\Seeder;

class SuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\supply::insert([
            'supply_type_id'    => 1,
            'token'             => 'S234FREKT',
            'title'             => 'Barroc Intens Italian Light',
            'price'             => '499.00',
            'instal_costs'      => '289.00',
            'quantity'          => '10'
        ]);
        \App\supply::insert([
            'supply_type_id'    => 1,
            'token'             => 'S234KNDPF',
            'title'             => 'Barroc Intens Italian',
            'price'             => '599.00',
            'instal_costs'      => '289.00',
            'quantity'          => '10'
        ]);
        \App\supply::insert([
            'supply_type_id'    => 1,
            'token'             => 'S234NNBMV',
            'title'             => 'Barroc Intens Italian Deluxe',
            'price'             => '799.00',
            'instal_costs'      => '375.00',
            'quantity'          => '10'
        ]);
        \App\supply::insert([
            'supply_type_id'    => 1,
            'token'             => 'S234MMPLA',
            'title'             => 'Barroc Intens Italian Deluxe Special',
            'price'             => '999.00',
            'instal_costs'      => '375.00',
            'quantity'          => '10'
        ]);


        \App\supply::insert([
            'supply_type_id'    => 2,
            'token'             => 'S239KLIUP',
            'title'             => 'Espresso Beneficio ',
            'price'             => '21.60',
            'description'       => 'Een toegankelijke en zachte koffie.  Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.'
        ]);
        \App\supply::insert([
            'supply_type_id'    => 2,
            'token'             => 'S234KNDPF',
            'title'             => 'Yellow Bourbon Brasil',
            'price'             => '23.20',
            'description'       => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.'
        ]);
        \App\supply::insert([
            'supply_type_id'    => 2,
            'token'             => 'S239IPPSD',
            'title'             => 'Espresso Roma',
            'price'             => '20.80',
            'description'      => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.'
        ]);
        \App\supply::insert([
            'supply_type_id'    => 2,
            'token'             => 'SS239EVVFS',
            'title'             => 'Red Honey Hondurasl',
            'price'             => '27.80',
            'description'      => 'De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.'
        ]);

    }
}
