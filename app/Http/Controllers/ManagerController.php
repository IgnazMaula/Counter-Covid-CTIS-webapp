<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $testCenter = DB::table('testcenters')->get();

        return view('manager.dashboard',  ['testCenter' => $testCenter] );
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
        return view('manager.viewTesters');
    }

    public function manageTestKit()
    {
        return view('manager.manageTestKit');
    }
    
    public function viewTestingHistory()
    {
        return view('manager.viewTestingHistory');
    }

    public function assignTestCenter()
    {
        return view('manager.assignTestCenter');
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