<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidTest;
use Illuminate\Support\Facades\Hash;

class BookTestScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $validatedData = $request->validate([
            'date' => ['required', 'string', 'max:255'],
        ]);
        
        $test = new CovidTest;

        $test->patientName = $request->patientName;
        $test->email = $request->email;
        $test->testCenter = $request->testCenter;
        $test->testType = $request->testType;
        $test->date = $request->date;
        $test->symptoms = $request->symptoms;
        $test->status = "Wait for Approval";
            
        $test->save();
        
        return view('patient.successBookTestSchedule');
        
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