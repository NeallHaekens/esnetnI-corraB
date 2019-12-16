<?php

use Illuminate\Database\Seeder;
use \App\Note;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Note::insert([
            'sales_id'          => 19,
            'customer_id'       => 33,
            'note'              => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. '
        ]);
        Note::insert([
            'sales_id'          => 19,
            'customer_id'       => 30,
            'note'              => 'Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.'
        ]);
        Note::insert([
            'sales_id'          => 18,
            'customer_id'       => 26,
            'note'              => 'Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.'
        ]);
        Note::insert([
            'sales_id'          => 18,
            'customer_id'       => 28,
            'note'              => 'Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.'
        ]);
        Note::insert([
            'sales_id'          => 19,
            'customer_id'       => 35,
            'note'              => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita facilis laudantium numquam quod sed voluptatem. Architecto explicabo facilis magni porro reiciendis. Asperiores deserunt et itaque nesciunt repudiandae. Error, itaque.'
        ]);
        Note::insert([
            'sales_id'          => 19,
            'customer_id'       => 36,
            'note'              => 'Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum.'
        ]);
        Note::insert([
            'sales_id'          => 18,
            'customer_id'       => 34,
            'note'              => 'Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. '
        ]);
    }
}
