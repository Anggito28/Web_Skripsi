<?php

namespace App\Http\Controllers;

use App\Models\testing_data;
use App\Http\Requests\Storetesting_dataRequest;
use App\Http\Requests\Updatetesting_dataRequest;

class TestingDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testing = testing_data::all();
        // dd($testing);
        return view('testing.index', compact(['testing']));
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
     * @param  \App\Http\Requests\Storetesting_dataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetesting_dataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testing_data  $testing_data
     * @return \Illuminate\Http\Response
     */
    public function show(testing_data $testing_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testing_data  $testing_data
     * @return \Illuminate\Http\Response
     */
    public function edit(testing_data $testing_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetesting_dataRequest  $request
     * @param  \App\Models\testing_data  $testing_data
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetesting_dataRequest $request, testing_data $testing_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testing_data  $testing_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(testing_data $testing_data)
    {
        //
    }
}
