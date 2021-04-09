<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestCenter;
use App\Models\User;
use App\Models\TestKit;

class RegisterTestCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => ['required', 'unique:test_centers', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);
        
        $testCenter = new TestCenter;

        $testCenter->name = $request->name;
        $testCenter->location = $request->location;
        
        // Assign the test center into manager who registered it
        User::where('id', $request->user()['id'])->update([
            'testCenter' => $request->name
        ]);
        
        $testCenter->save();

        $testKit = new TestKit;

        $testKit->center_id = $testCenter->id;
        $testKit->rapidStock = $request->rapidStock;
        $testKit->swabStock = $request->swabStock;
        $testKit->pcrStock = $request->pcrStock;
        
        $testKit->save();

        return view('manager.successRegisterTestCenter', ['name' => $testCenter->name]);
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