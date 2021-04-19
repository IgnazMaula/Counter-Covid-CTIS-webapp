<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CovidTest;
use App\Models\TestCenter;
use Illuminate\Support\Facades\Hash;
use DB;


class RegisterPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $testCenter = DB::table('test_centers')->get();
        return view('tester.registerPatient',  ['testCenter' => $testCenter]); 
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
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birthDate' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'max:255'],
        ]);
        
        $user = new User;

        $name = $request->name . ' ' . $request->lastName;

        $user->name = $name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->birthDate = $request->birthDate;
        $user->gender = $request->gender;

        $user->save();

        $test = new CovidTest;

        $test->patientName = $name;
        $test->email = $request->email;
        $test->testCenter = $request->testCenter;
        $test->testType = $request->testType;
        $test->date = $request->date;
        $test->symptoms = $request->symptoms;
        $test->status = "Accepted";
            
        $test->save();
        
        return view('tester.successRegisterPatient');
        
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