<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestCenter;
use App\Models\User;

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
            'name' => ['unique:testcenters','required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);
        
        $testCenter = new TestCenter;

        $testCenter->name = $request->name;
        $testCenter->location = $request->location;
        $testCenter->manager_id = $request->manager_id;
        
        // $request->user()['testCenter'] = $request->name;
        User::where('id', $request->user()['id'])->update([
            'testCenter' => $request->name
        ]);
        
        $testCenter->save();
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