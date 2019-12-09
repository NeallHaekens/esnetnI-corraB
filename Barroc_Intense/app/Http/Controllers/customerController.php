<?php

namespace App\Http\Controllers;

use App\Malfunction;
use Illuminate\Http\Request;
use \App\User;


class customerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    public function __construct()
//    {
//        $this->middleware('auth' , 'role:7');
//    }

    public function index()
    {
        return view('customer/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $malfunction_types = \App\Malfunction_type::all();
        return view('customer/create', ['malfunction_types'=>$malfunction_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //            Product::insert([
        //                'name'           => $request->name,
        //                'price'          => $request->price,
        //                'categories_id'  => $request->categorie_id
        //            ])


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
//        $customer = User::query()
//            ->where('id', $id)
//            ->first();

        $customer = User::find($id);
        return view('customer/show', ['customer' => $customer] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $customer = User::query()
            ->where('id', $id)
            ->first();
        $customer = User::find($id);

        return view('customer.edit', [
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // 1. ingekomen aanpassingen aanpassen op de juiste plaats
        // 2. redirecten naar show of index
        $customer = User::find($id);

        $customer->update([
            'name'           => $request->name,
            'email'          => $request->email,
        ]);
        return redirect()->route('customer.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
