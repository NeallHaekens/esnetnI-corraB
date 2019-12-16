<?php

namespace App\Http\Controllers;

use Auth;
use \App\work_orders;
use App\User;
use \App\Malfunction;
use \App\lease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $malfunctions = Malfunction::all();
        return view('maintenance.index', ['malfunctions' => $malfunctions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $malfunctions = Malfunction::all();
        return view('maintenance.create', ['malfunctions' => $malfunctions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $lease_id = \DB::table('leases')
            ->select('id')
            ->join('work_orders', 'work_orders.lease_id', '=', 'leases.id')
            ->get();

        Work_orders::insert([
            'maintenance_id'        => $user->id,
            'lease_id'              => $lease_id->customer_id,
            'malfunction_id'        => $request->malfunction_id
        ]);

        return redirect()->route('malfucntion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
