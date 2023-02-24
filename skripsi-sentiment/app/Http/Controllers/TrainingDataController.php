<?php

namespace App\Http\Controllers;

use App\Models\training_data;
use App\Http\Requests\Storetraining_dataRequest;
use App\Http\Requests\Updatetraining_dataRequest;

class TrainingDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training = training_data::all();
        // dd($testing);
        return view('/training', compact(['training']));
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
     * @param  \App\Http\Requests\Storetraining_dataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetraining_dataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\training_data  $training_data
     * @return \Illuminate\Http\Response
     */
    public function show(training_data $training_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\training_data  $training_data
     * @return \Illuminate\Http\Response
     */
    public function edit(training_data $training_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetraining_dataRequest  $request
     * @param  \App\Models\training_data  $training_data
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetraining_dataRequest $request, training_data $training_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\training_data  $training_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(training_data $training_data)
    {
        //
    }
}
