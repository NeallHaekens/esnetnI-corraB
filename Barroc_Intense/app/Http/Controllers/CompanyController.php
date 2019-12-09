<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = company::where('BKR', 0)->get();
        return view('finance/bkr', ['companys'=>$companys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $company = company::find($id);

        return view('finance/edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = company::find($id);
        if ($request->bkr == 'denied')
        {
            $bkr = 0;
        }
        else
        {
            $bkr = 1;
        }
        $company->update([
            'company_name' => $request->CName,
            'phone_number' => $request->Phone,
            'email' => $request->Email,
            'adress' => $request->Adress,
            'BKR' => $bkr
        ]);

        return redirect()->action('CompanyController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        //
    }
}
