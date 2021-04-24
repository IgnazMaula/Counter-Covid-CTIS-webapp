<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestKit;
use DB;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {   
        $testCenter = DB::table('test_centers')->get();
        $tester = DB::table('users')->get();
        $covidTests = DB::table('covid_tests')->get();
        return view('manager.dashboard',  ['testCenter' => $testCenter, 'tester' => $tester, 'covidTests' => $covidTests]);
    }

    public function registerTestCenter()
    {
        return view('manager.registerTestCenter');
    }

    public function registerTester()
    {
        return view('manager.registerTester');
    }

    public function viewTesters()
    {   
        $tester = DB::table('users')->get();
        return view('manager.viewTesters', ['tester' => $tester]);
    }

    public function manageTestKit()
    {   
        $testCenter = DB::table('test_centers')->get();
        $testKits = DB::table('test_kits')->get();
        return view('manager.manageTestKit', ['testCenter' => $testCenter, 'testKits' => $testKits]);
    }

    public function manageTestKitAction(Request $request)
    {   
        TestKit::where('id', $request->id)->update([
            'rapidStock' => $request->rapid,
            'swabStock' => $request->swab,
            'pcrStock' => $request->pcr,
        ]);
        return view('manager.successUpdateTestKit');
    }
    
    public function viewTestingHistory()
    {   
        $covidTests = DB::table('covid_tests')->get();
        return view('manager.viewTestingHistory' , ['covidTests' => $covidTests]);
    }
    public function testReport()
    {   
        $covidTests = DB::table('covid_tests')->get();
        return view('manager.testReport' , ['covidTests' => $covidTests]);
    }

    public function assignTestCenter()
    {
        return view('manager.assignTestCenter');
    }
    public function success() {
        return view('manager.registertest_centersuccess');
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