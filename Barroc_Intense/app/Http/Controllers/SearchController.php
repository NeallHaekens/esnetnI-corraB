<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search() {
        $name = Request::get('name');
        $hasCoffeeMachine = Request::get('CoffeeMachine');

        $result = DB::table('customers')
            ->select(DB::raw("*"))
            ->where('name', '=', $name)
            ->where('has_coffee_machine', '=', $hasCoffeeMachine)
            ->get();

        return $result;
    }
}
