<?php

namespace App\Http\Controllers;


use App\Note;
use App\User;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::all();
        return view('sales/index', ['customers' => $customers] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = \App\Role::all();
        return view('auth/register', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'role_id ' => $request->role_id,
            'password' => $request->password
        ]);

        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = User::find($id);
//        $note = Note::all();
        return view('sales/show', ['customer' => $customer] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $customer = User::query()
//            ->where('id', $id)
//            ->first();
        $customer = User::find($id);

        $note = Note::all();

        return view('sales.edit', [
            'customer' => $customer,
            'note' => $note
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(sales $sales)
    {
        //
    }
}
