<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {   
        // $covidTests = DB::table('covid_tests')->get();
        // $tester = DB::table('users')->get();
        // $testCenters = DB::table('test_centers')->get();
        // $testKits = DB::table('test_kits')->get();
        // return view('tester.dashboard', ['covidTests' => $covidTests], ['tester' => $tester], ['testCenters' => $testCenters], ['testKits' => $testKits]);

        $testCenters = DB::table('test_centers')->get(); 
        $covidTests = DB::table('covid_tests')->get();
        $testKits = DB::table('test_kits')->get();
        return view('tester.dashboard',  ['testCenters' => $testCenters, 'covidTests' => $covidTests, 'testKits' => $testKits]);
    }

    // public function registerPatient()
    // {
    //     return view('tester.registerPatient');
    // }

    public function approveTestRequest()
    {   
        $covidTests = DB::table('covid_tests')->get();
        return view('tester.approveTestRequest', ['covidTests' => $covidTests]);
    }

    public function updateTestResult()
    {
        return view('tester.updateTestResult');
    }
    
    public function viewTestingHistory()
    {
        return view('tester.viewTestingHistory');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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