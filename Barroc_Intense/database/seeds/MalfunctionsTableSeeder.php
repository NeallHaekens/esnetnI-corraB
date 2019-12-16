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
            'description'           => "Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc."
        ]);
        Malfunction::insert([
            'client_id'             => 33,
            'malfunction_type_id'   => 3,
            'description'           => "Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis."
        ]);
        Malfunction::insert([
            'client_id'             => 30,
            'malfunction_type_id'   => 1,
            'description'           => "Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit."
        ]);
        Malfunction::insert([
            'client_id'             => 28,
            'malfunction_type_id'   => 1,
            'description'           => "Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc."
        ]);
        Malfunction::insert([
            'client_id'             => 32,
            'malfunction_type_id'   => 4,
            'description'           => "Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna."
        ]);
        Malfunction::insert([
            'client_id'             => 27,
            'malfunction_type_id'   => 1,
            'description'           => "In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique."
        ]);
        Malfunction::insert([
            'client_id'             => 36,
            'malfunction_type_id'   => 2,
            'description'           => "Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit."
        ]);
        Malfunction::insert([
            'client_id'             => 35,
            'malfunction_type_id'   => 2,
            'description'           => "Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Donec venenatis vulputate lorem."
        ]);
        Malfunction::insert([
            'client_id'             => 29,
            'malfunction_type_id'   => 4,
            'description'           => "Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa."
        ]);
        Malfunction::insert([
            'client_id'             => 26,
            'malfunction_type_id'   => 4,
            'description'           => "Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero."
        ]);

    }
}
