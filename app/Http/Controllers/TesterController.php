<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\CovidTest;
use App\Models\User;
use App\Models\TestCenter;
use App\Models\TestKit;

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
    
    public function testRequestAction(Request $request)
    {   
        CovidTest::where('id', $request->id)->update([
            'status' => $request->action,
        ]);
        
        $patientName = $request->patientName;
        $action = $request->action;
        return view('tester.successApproveTestRequest', ['patientName' => $patientName, 'action'=> $action]);
    }

    public function updateTestResult()
    {   
        $covidTests = DB::table('covid_tests')->get();
        return view('tester.updateTestResult', ['covidTests' => $covidTests]);
    }
    
    public function testResultAction(Request $request)
    {   
        
        CovidTest::where('id', $request->id)->update([
            'result' => $request->action,
            'status' => "Completed",
            'testerName' => $request->user()['name'] 
        ]);
        User::where('email', $request->patientEmail)->update([
            'currentStatus' => $request->action,
        ]);
        
        $testKits = DB::table('test_kits')->get();
        $testCenters = DB::table('test_centers')->get();
        
        $tc_id;
        foreach ($testCenters as $tc) {
            if ($tc->name == $request->testCenter) {
                $tc_id = $tc->id;
            }
        }
        
        $rapid;
        $swab;
        $pcr;

        foreach ($testKits as $tk) {
            if ($tk->id == $tc_id) {
                $rapid = $tk->rapidStock;
                $swab = $tk->swabStock;
                $pcr = $tk->pcrStock;
            }
        }

        if ($request->testType == "Rapid Test") {
            
            TestKit::where('center_id', $tc_id)->update([
                'rapidStock' => $rapid - 1,
            ]);
        }
        elseif ($request->testType == "Swab Test") {
                TestKit::where('center_id', $tc_id)->update([
                    'swabStock' => $swab - 1,
                ]);
            }
        else {
                TestKit::where('center_id', $tc_id)->update([
                    'pcrStock' => $pcr - 1,
                ]);
            }
        
        
        $patientName = $request->patientName;
        $action = $request->action;
        return view('tester.successUpdateTestResult', ['patientName' => $patientName, 'action'=> $action]);
    }

    public function viewTestingHistory()
    {
        $covidTests = DB::table('covid_tests')->get();
        return view('tester.viewTestingHistory', ['covidTests' => $covidTests]);
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